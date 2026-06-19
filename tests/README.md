# Tests

## Unit tests

```bash
composer test
```

Runs the mocked PHPUnit suite (no Saferpay credentials or network access required).

## Integration test (full payment flow)

To run the README payment flow end-to-end against the Saferpay test environment (initialize → payment page → assert → capture → refund), copy `example/credentials.dist.php` to `example/credentials.php`, fill in your test credentials, then:

```bash
composer test-integration
```

This uses Playwright to complete the hosted payment page in a headless browser. The integration suite is excluded from `composer test` so CI stays offline-friendly.

### Requirements

- Node.js (included in the project Docker image)
- Saferpay test credentials in `example/credentials.php`

`composer test-integration` installs Playwright npm packages automatically on first run. Chromium is pre-installed in the Docker image.

### Docker

```bash
docker compose build
docker compose run --rm php composer install
docker compose run --rm php composer test-integration
```

Mount `example/credentials.php` from the host (the repo is bind-mounted at `/var/www/html`). The PHP image includes Node.js, Playwright OS dependencies, and Chromium at `/opt/ms-playwright`.

### Test card overrides

Optional environment variables for the browser step:

- `SAFERPAY_TEST_CARD` (default: `9010003150000001`)
- `SAFERPAY_TEST_EXPIRY` (default: `12/30`)
- `SAFERPAY_TEST_CVC` (default: `123`)
