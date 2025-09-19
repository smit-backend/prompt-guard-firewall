# PromptShield: Real-Time LLM Prompt Firewall

[![GitHub License](https://img.shields.io/github/license/smit-backend/prompt-guard-firewall?style=flat-square)](LICENSE)
[![GitHub Stars](https://img.shields.io/github/stars/smit-backend/prompt-guard-firewall?style=flat-square)](https://github.com/smit-backend/prompt-guard-firewall/stargazers)
[![GitHub Issues](https://img.shields.io/github/issues/smit-backend/prompt-guard-firewall?style=flat-square)](https://github.com/smit-backend/prompt-guard-firewall/issues)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-blue?style=flat-square&logo=php)](https://php.net)

> **High-speed inline security gateway detecting prompt injection, recursive jailbreaks, system prompt exfiltration, and toxic inputs.**

---

## 🚀 Key Architectural Highlights

- **Production Resilience:** Engineered with decoupled interfaces, structured exception trees, and strict typings.
- **High Concurrency Ready:** Built to eliminate latency bottlenecks, memory spikes, and race conditions.
- **Enterprise Standards:** Zero-dependency core logic with clean service provider adapters.
- **Full Observability:** Embedded metrics telemetry and structured contextual logging.

---

## 🛠️ Architecture & Lifecycle Workflow

```mermaid
graph TD
    Client[Incoming Event / API Trigger] --> Gate[Input Validation & Policy Guard]
    Gate --> CoreEngine[PromptShield: Real-Time LLM Prompt Firewall]
    CoreEngine --> Adapter[External Storage / Cluster / State Provider]
    CoreEngine --> Observer[Telemetry & Audit Logger]
```

---

## 📦 Installation & Setup

### Requirements
- **PHP:** `^8.2` or later
- **Composer:** Modern Composer v2+

### Installation via Composer
```bash
composer require smit-backend/prompt-guard-firewall
```

---

## ⚙️ Configuration & Quick Start

Publish configuration and default assets:
```bash
php artisan vendor:publish --tag="prompt-guard-firewall-config"
```

Sample configuration excerpt (`config/prompt-guard-firewall.php`):
```php
return [
    'enabled' => env('PROMPT_GUARD_FIREWALL_ENABLED', true),
    'timeout' => env('PROMPT_GUARD_FIREWALL_TIMEOUT', 30),
    'log_channel' => env('PROMPT_GUARD_FIREWALL_LOG', 'stack'),
];
```

---

## 🧪 Testing

Run test suites locally:
```bash
composer test
```

---

## 🛡️ Security & Contributing

If you discover any security-related issues, please open an issue or email directly via GitHub. Contributions via pull requests are always welcome!

---

## 📄 License

This package is open-sourced software licensed under the [MIT License](LICENSE).

Developed and maintained with ❤️ by **[smit-backend](https://github.com/smit-backend)**.
