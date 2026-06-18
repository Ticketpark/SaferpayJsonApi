# AGENTS.md

Guidance for AI agents working on [Ticketpark/SaferpayJsonApi](https://github.com/Ticketpark/SaferpayJsonApi).

## Project overview

PHP library (`ticketpark/saferpay-json-api`) that wraps the [Saferpay JSON API](https://saferpay.github.io/jsonapi/). It serializes typed request objects to JSON, sends them via a PSR-18 HTTP client, and deserializes responses.

- **Namespace:** `Ticketpark\SaferpayJson`
- **Autoload:** `lib/SaferpayJson/` (PSR-4)
- **PHP:** 7.4–8.5
- **Key dependencies:** `jms/serializer`, `psr/http-client`, `guzzlehttp/guzzle` (default HTTP client), `doctrine/annotations`

Check `lib/SaferpayJson/Request/Container/RequestHeader.php` and `README.md` for the current target API version.

## Repository layout

```
lib/SaferpayJson/
  Request/              # API request classes and shared request infrastructure
    Container/          # Request payload containers (nested JSON objects)
    PaymentPage/        # PaymentPage/* endpoints
    Transaction/        # Transaction/* endpoints
    SecureCardData/     # Alias/* endpoints
  Response/             # API response classes
    Container/          # Response payload containers
    PaymentPage/
    Transaction/
    SecureCardData/
tests/SaferpayJson/Tests/Request/   # Mirrors Request/ structure
example/                            # Runnable usage examples (need credentials.php)
.github/
  contributing.md       # Container conventions (authoritative)
  pull_request_template.md
```

## Architecture

### Request flow

1. Create a `RequestConfig` with API credentials and optional test mode.
2. Instantiate a concrete `Request` subclass with required containers.
3. Call `execute()` → HTTP POST to `{rootUrl}{API_PATH}` with JSON body.
4. Success → typed `Response`; 4xx → `SaferpayErrorException` with `ErrorResponse`.

`RequestHeader` (including `SpecVersion`) is injected automatically via `Request::getRequestHeader()` and is **not** set on request classes directly.

### Request classes

Each endpoint is a `final class` extending `Request`:

- `use RequestCommonsTrait`
- `public const API_PATH = '/Payment/v1/...'`
- `public const RESPONSE_CLASS = SomeResponse::class`
- Constructor takes `RequestConfig` plus Saferpay-mandatory fields; calls `parent::__construct($requestConfig)`
- `execute(): SomeResponse` delegates to `doExecute()` with a return type hint
- Properties map to JSON via `@SerializedName("FieldName")` (PascalCase, matching Saferpay docs)
- Enum-like API values get `public const` on the request class (e.g. `PAYMENT_METHOD_VISA`, `WALLET_APPLEPAY`)

### Containers

**Request containers** (`lib/SaferpayJson/Request/Container/`):

- `final class`, `@SerializedName` on every property
- Mandatory Saferpay fields → constructor parameters, **no setters** for constructor args
- Optional fields → nullable properties with getters/setters returning `self`
- Reuse existing containers when Saferpay reuses the same JSON structure (e.g. `ForeignRetailer` in both `Marketplace` and `MerchantFundDistributor`)

**Response containers** (`lib/SaferpayJson/Response/Container/`):

- No constructors, no setters, all properties optional (`?type = null`)
- Getters only — even when Saferpay marks fields mandatory, keep them optional here

See [.github/contributing.md](.github/contributing.md) for the full rationale.

### Implemented endpoints

This library covers a **subset** of the Saferpay API. Currently implemented:

| Area | Endpoints |
|------|-----------|
| PaymentPage | Initialize, Assert |
| Transaction | Initialize, Authorize, AuthorizeDirect, AuthorizeReferenced, Capture, Refund, Cancel, Inquire |
| SecureCardData | Alias Insert, AssertInsert, InsertDirect, Update, Delete |

Not implemented (among others): MultipartCapture, AssertCapture, RefundDirect, RedirectPayment, AlternativePayment, DccInquiry, Batch, OmniChannel, Management API.

When bumping API versions, only add types for endpoints this library already implements, unless explicitly asked to add new endpoints.

## Bumping the Saferpay API version

Follow the [Saferpay changelog](https://saferpay.github.io/jsonapi/) for the target version.

1. Read the changelog entry for the new version (e.g. [v1.43](https://saferpay.github.io/jsonapi/1.43/index.html)).
2. Apply only changes relevant to **implemented** endpoints and containers.
3. Update `RequestHeader::$specVersion` (default spec version sent with every request).
4. Update the version link in `README.md` to `https://saferpay.github.io/jsonapi/{version}/index.html`.
5. Add new containers / fields / constants as described in the spec.
6. Wire new optional containers into the matching `*Request` classes with getter/setter.
7. Run tests and static analysis (see below).

**Example (v1.43):**

- New `MerchantFundDistributor` container → added to `CaptureRequest`
- `CLICKTOPAY` wallet → constant on `PaymentPage/InitializeRequest`
- `ForeignRetailer` subcontainer reused from v1.41

**Branch and PR conventions:**

- Branch: `feature/bump-saferpay-api-version-on-1-XX`
- Commit: `feat: Version bump to 1.XX`
- PR body: see [Pull requests](#pull-requests) and fill in the template bullets (e.g. `Bump SpecVersion to 1.XX`, one bullet per meaningful change).

Do not commit or open PRs unless the user asks.

## Pull requests

Stick to [.github/pull_request_template.md](.github/pull_request_template.md): `Closes #<issue>` followed by bullet points only.

- Never add a test plan section to the PR body.
- Never add a "created by …" signature to the PR.

## Adding or changing code

### New request container

```php
final class ExampleContainer
{
    /** @SerializedName("FieldName") */
    private ?string $field = null;

    public function getField(): ?string { ... }
    public function setField(?string $field): self { ... }
}
```

Place under `Request/Container/`. Use sub-namespaces when Saferpay groups containers (e.g. `Request/Container/Transaction/`).

### New endpoint (only when requested)

1. Add `*Request` in the appropriate `Request/` subdirectory.
2. Add `*Response` in the matching `Response/` subdirectory extending `Response`.
3. Add containers for any new JSON structures.
4. Add `tests/SaferpayJson/Tests/Request/.../*RequestTest.php` extending `CommonRequestTest`.
5. Optionally add an `example/` script.

### Constants

Add `public const` for documented enum values on the request class that uses them (payment methods, wallets, conditions, statuses). Response classes may define status constants where useful (`CaptureResponse::STATUS_CAPTURED`).

### Style

- `declare(strict_types=1);` in every file
- Follow [Symfony coding standards](https://symfony.com/doc/current/contributing/code/standards.html)
- `final` on concrete classes
- Minimal scope — match surrounding code; no drive-by refactors

## Testing

```bash
composer install
composer test
composer phpstan
composer cs-check
composer cs-fix   # apply coding standard fixes
```

Request tests extend `CommonRequestTest`:

- Implement `getInstance()` returning a configured request
- Call `doTestSuccessfulResponse(ResponseClass::class)` for the happy path
- Error path and `RequestConfig` retry validation are inherited

CI (`.github/workflows/tests.yml`) runs PHPUnit on PHP 7.4–8.5 (prefer-lowest and prefer-stable), plus PHPStan level 8, php-cs-fixer, and `composer validate`.

## Common pitfalls

- **Spec version:** Must stay in sync across `RequestHeader` and `README.md`.
- **Mandatory vs optional:** Follow Saferpay docs for requests; keep response fields optional regardless.
- **RequestHeader:** Never add it as a serialized property on request classes — it is a virtual property.
- **Container reuse:** Check for an existing container before creating a duplicate.
- **Partial API coverage:** Changelog entries may mention endpoints this library does not implement; skip those unless adding the endpoint is in scope.
- **Tests:** New request classes need a test class; existing tests mock Guzzle and do not hit the real API.

## References

- [Saferpay JSON API docs](https://saferpay.github.io/jsonapi/)
- [Contributing guidelines](.github/contributing.md)
- [Examples](example/)
