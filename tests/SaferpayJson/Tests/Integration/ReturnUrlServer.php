<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Integration;

final class ReturnUrlServer
{
    /** @var resource|null */
    private $process;

    private string $documentRoot;

    public function __construct(
        private readonly int $port,
    ) {
        $this->documentRoot = sys_get_temp_dir().'/saferpay-return-url-'.$port;
    }

    public static function start(): self
    {
        $port = self::findFreePort();
        $server = new self($port);
        $server->boot();

        return $server;
    }

    public function getSuccessUrl(): string
    {
        return sprintf('http://127.0.0.1:%d/success', $this->port);
    }

    public function getUrlPrefix(): string
    {
        return sprintf('http://127.0.0.1:%d', $this->port);
    }

    public function stop(): void
    {
        if (!\is_resource($this->process)) {
            return;
        }

        proc_terminate($this->process);
        proc_close($this->process);
        $this->process = null;

        if (is_dir($this->documentRoot)) {
            @unlink($this->documentRoot.'/success/index.php');
            @rmdir($this->documentRoot.'/success');
            @rmdir($this->documentRoot);
        }
    }

    private function boot(): void
    {
        if (!mkdir($this->documentRoot.'/success', 0777, true) && !is_dir($this->documentRoot.'/success')) {
            throw new \RuntimeException('Could not create return URL document root.');
        }

        file_put_contents(
            $this->documentRoot.'/success/index.php',
            <<<'PHP'
            <?php declare(strict_types=1);
            http_response_code(200);
            echo 'OK';
            PHP,
        );

        $command = sprintf(
            '%s -S 127.0.0.1:%d -t %s',
            escapeshellarg(\PHP_BINARY),
            $this->port,
            escapeshellarg($this->documentRoot),
        );

        $pipes = [];
        $this->process = proc_open(
            $command,
            [['pipe', 'r'], ['pipe', 'w'], ['pipe', 'w']],
            $pipes,
            null,
            null,
            ['create_new_console' => true],
        );

        if (false === $this->process) {
            throw new \RuntimeException('Could not start local return URL server.');
        }

        fclose($pipes[0]);
        fclose($pipes[1]);
        fclose($pipes[2]);

        self::waitUntilReady($this->port);
    }

    private static function findFreePort(): int
    {
        $socket = socket_create(\AF_INET, \SOCK_STREAM, \SOL_TCP);

        if (false === $socket) {
            throw new \RuntimeException('Could not create socket for return URL server.');
        }

        socket_bind($socket, '127.0.0.1', 0);
        socket_getsockname($socket, $address, $port);
        socket_close($socket);

        return $port;
    }

    private static function waitUntilReady(int $port): void
    {
        $deadline = microtime(true) + 5.0;

        while (microtime(true) < $deadline) {
            $connection = @fsockopen('127.0.0.1', $port);
            if (false !== $connection) {
                fclose($connection);

                return;
            }

            usleep(50_000);
        }

        throw new \RuntimeException(sprintf('Return URL server did not start on port %d.', $port));
    }
}
