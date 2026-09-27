> **Consolidated → archived.** This repo was merged into the single archive
> [**universal-analytics-fake-traffic-suite**](https://github.com/wantmyusername/universal-analytics-fake-traffic-suite).
> It is archived and kept only for reference.

# Analytics Traffic — Admin Dashboard — *Deprecated*

> **Deprecated / historical code.** This is the admin dashboard of an old fake-traffic suite that targeted **Universal Analytics**, which was shut down on **July 1, 2023**. It no longer works and is kept only as a memory of what this once was. Not maintained, not to be used.

## What this code was

A single-file **Bootstrap admin dashboard** (`admin.php`) for an *"Organic Pageview Generator Suite"*. It started a PHP session and redirected to `index.php` when no user was logged in, then exposed a set of forms that submitted fake-traffic jobs to the generator backends **inside a hidden iframe** named `traficomixto`.

It offered two modes:

| Tab | Submits to | Notes |
|---|---|---|
| **Organic Suite with Session Time** | `pageviewsmixed.php` | Fills organic traffic with a session duration. |
| **Organic Suite – No session time** | `pageviewsmixed_fast.php` | Organic traffic without session time (real-time only). |

### Form options

- **General Settings** — hits quantity, pageviews per hit, UA code (`UA-123456-12`), website title.
- **Search Engine & Keyword** — Google, Bing, Yahoo, Ask, Baidu, Yandex, AOL, Naver.
- **Pages Settings** — the page URLs to attribute the traffic to.
- **Location Settings** — country/region code (a full country list is included in the markup).
- **Language / referrer** and other per-hit fields.

## Dependencies (not included)

The dashboard only orchestrates the suite; the actual logic lives elsewhere and is **not** part of this repository:

- `index.php` — login page.
- `pageviewsmixed.php` / `pageviewsmixed_fast.php` — the traffic generators.
- Bootstrap CSS/JS assets (`css/bootstrap.min.css`, `js/bootstrap.min.js`, jQuery).

## Status

- Built around **Universal Analytics**, which stopped processing data on **July 1, 2023**.
- **Non-functional** and unmaintained. Preserved only as a historical artifact.

## Disclaimer

Published for historical/reference purposes only. Its only purpose was to generate artificial analytics traffic, which violates the terms of service of analytics platforms and can be considered fraud. **Do not use it.**
