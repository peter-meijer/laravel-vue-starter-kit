# Laravel + Vue Starter Kit

A modern, robust starting point for building Laravel 13 applications with a Vue 3 frontend using [Inertia.js 3.0](https://inertiajs.com).

## ✨ Features

- **Framework**: [Laravel 13](https://laravel.com) & [PHP 8.4+](https://php.net)
- **Frontend**: [Vue 3](https://vuejs.org) (Composition API) with [TypeScript](https://www.typescriptlang.org)
- **Routing**: [Inertia.js 3.0](https://inertiajs.com) for a seamless SPA experience
- **Styling**: [Tailwind CSS 4](https://tailwindcss.com) with [shadcn-vue](https://www.shadcn-vue.com) components
- **Authentication**: Powered by [Laravel Fortify](https://laravel.com/docs/fortify), with registration, email verification, two-factor authentication, passkeys and password confirmation
- **Notifications**: Toasts via [vue-sonner](https://github.com/xiaoluoboding/vue-sonner)
- **Icons**: [Lucide](https://lucide.dev) (`@lucide/vue`)
- **Tooling**:
    - [Vite+](https://viteplus.dev) for development, builds, linting (Oxlint) and formatting (Oxfmt)
    - [Pest](https://pestphp.com) for elegant testing
    - [Laravel Pint](https://laravel.com/docs/pint) for code style
    - [Larastan](https://github.com/larastan/larastan) for static analysis
    - [Rector](https://getrector.com) for automated refactoring
    - [Pail](https://github.com/laravel/pail) for terminal logging

## 🚀 Quick Start

Get your project up and running in minutes.

### 1. Installation

Clone the repository and run the setup script:

```bash
git clone git@github.com:peter-meijer/laravel-vue-starter-kit.git my-app
cd my-app
composer setup
```

The `setup` script will:

- Install PHP and Node dependencies
- Create your `.env` file (if it doesn't exist)
- Generate an application key
- Run database migrations
- Build frontend assets

All authentication features are enabled by default. To remove the ones you don't need, run:

```bash
php artisan install:features
```

This removes the unselected features from the code and deletes the installer afterwards. Note that `composer update` runs the same command.

### 2. Development

Start the development server, queue listener, logs, and Vite watcher with a single command:

```bash
composer dev
```

The application is then available at [http://127.0.0.1:8000](http://127.0.0.1:8000).

If PHP runs in a container, such as with Lerd, port 8000 may not be reachable from your browser. Serve the project through that environment instead (with Lerd: `lerd link` and `lerd secure`) and set `APP_URL` in `.env` to the site's URL. Passkeys require HTTPS and an `APP_URL` that matches the domain.

## 🛠 Commands

| Command                | Description                                               |
| ---------------------- | --------------------------------------------------------- |
| `composer setup`       | Full project installation and setup                       |
| `composer dev`         | Start development environment (Server, Queue, Logs, Vite) |
| `composer test`        | Run code style checks, static analysis and tests          |
| `composer types:check` | Run static analysis with Larastan                         |
| `composer lint`        | Fix code style with Laravel Pint                          |
| `npm run build`        | Build production assets                                   |
| `npm run check`        | Lint and check formatting of the frontend                 |
| `npm run check:fix`    | Fix frontend lint and formatting issues                   |
| `npm run types:check`  | Run Vue-TSC type checking                                 |

## 🧪 Testing & Quality

Maintain high code quality with built-in tools:

- **Tests**: `composer test`
- **Static Analysis**: `composer types:check`
- **Linting**: `composer lint`

## 📄 License

The Laravel + Vue starter kit is open-sourced software licensed under the [MIT license](LICENSE).
