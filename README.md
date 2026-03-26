# Laravel + Vue Starter Kit

A modern, robust starting point for building Laravel 13 applications with a Vue 3 frontend using [Inertia.js 3.0](https://inertiajs.com).

## ✨ Features

- **Framework**: [Laravel 13](https://laravel.com) & [PHP 8.4+](https://php.net)
- **Frontend**: [Vue 3](https://vuejs.org) (Composition API) with [TypeScript](https://www.typescriptlang.org)
- **Routing**: [Inertia.js 3.0](https://inertiajs.com) for a seamless SPA experience
- **Styling**: [Tailwind CSS 4](https://tailwindcss.com) with [shadcn-vue](https://www.shadcn-vue.com) components
- **Authentication**: Powered by [Laravel Fortify](https://laravel.com/docs/fortify)
- **Icons**: [Lucide Vue Next](https://lucide.dev)
- **Tooling**:
    - [Vite](https://vitejs.dev) for fast development
    - [Pest](https://pestphp.com) for elegant testing
    - [Laravel Pint](https://laravel.com/docs/pint) for code style
    - [Larastan](https://github.com/larastan/larastan) for static analysis
    - [Pail](https://github.com/laravel/pail) for terminal logging

## 🚀 Quick Start

Get your project up and running in minutes.

### 1. Installation

Clone the repository and run the setup script:

```bash
composer setup
```

The `setup` script will:
- Install PHP and Node dependencies
- Create your `.env` file (if it doesn't exist)
- Generate an application key
- Run database migrations
- Build frontend assets

### 2. Development

Start the development server, queue listener, logs, and Vite watcher with a single command:

```bash
composer dev
```

Alternatively, if you need Server-Side Rendering (SSR):

```bash
composer dev:ssr
```

## 🛠 Commands

| Command | Description |
| --- | --- |
| `composer setup` | Full project installation and setup |
| `composer dev` | Start development environment (Server, Queue, Logs, Vite) |
| `composer test` | Run tests and check code style |
| `composer lint` | Fix code style with Laravel Pint |
| `npm run build` | Build production assets |
| `npm run types:check` | Run Vue-TSC type checking |

## 🧪 Testing & Quality

Maintain high code quality with built-in tools:

- **Tests**: `composer test`
- **Static Analysis**: `./vendor/bin/phpstan`
- **Linting**: `composer lint`

## 📄 License

The Laravel + Vue starter kit is open-sourced software licensed under the [MIT license](LICENSE).
