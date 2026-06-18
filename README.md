# Laravel Portfolio Template

A clean Laravel portfolio starter with Blade, Vite, Tailwind CSS, and a generated hero asset. The content is intentionally placeholder-first so you can replace it with your real portfolio later.

## Requirements

- PHP 8.5+
- Composer
- Node.js and npm

## Setup

```bash
composer install
copy .env.example .env
php artisan key:generate
npm install
npm run dev
php artisan serve
```

Open `http://127.0.0.1:8000`.

Laravel's current installer guidance for 13.x expects PHP, Composer, and Node/NPM to be installed before running the app. If those are missing on Windows, Laravel documents the `php.new` installer path for PHP 8.5.

## Customize

- Portfolio content lives in `routes/web.php`.
- The main page template lives in `resources/views/portfolio.blade.php`.
- Styling lives in `resources/css/app.css` and `tailwind.config.js`.
- The hero image is `public/images/portfolio-hero.png`.
