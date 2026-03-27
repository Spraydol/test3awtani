# Edubuddy – Laravel Project Setup Guide

## Stack
- **PHP 8.2+** / **Laravel 11**
- **MySQL** – database
- **Laravel Sanctum** – API token auth
- **Plain HTML/CSS/JS** – frontend (no build step needed)

---

## Prerequisites

Install these on your PC before starting:

| Tool | Download | Min version |
|------|----------|-------------|
| PHP  | https://www.php.net/downloads | 8.2 |
| Composer | https://getcomposer.org | 2.x |
| MySQL | https://dev.mysql.com/downloads | 8.x |
| Git (optional) | https://git-scm.com | any |

> **Windows tip:** Install [Laragon](https://laragon.org) — it bundles PHP, MySQL, and Composer in one click. Fastest setup by far.

---

## Step-by-step Setup

### 1. Extract this project
Unzip the folder. You should see:
```
laravel-edubuddy/
├── app/
├── database/
├── public/          ← CSS, JS, images live here
├── resources/views/ ← Blade templates
├── routes/
├── composer.json
└── .env.example
```

### 2. Install PHP dependencies
```bash
cd laravel-edubuddy
composer install
```
This downloads Laravel and all packages into `vendor/`.

### 3. Copy the environment file
```bash
cp .env.example .env
```
Then generate the app key:
```bash
php artisan key:generate
```

### 4. Configure your database
Edit `.env` and set your MySQL credentials:
```
DB_DATABASE=edubuddy
DB_USERNAME=root
DB_PASSWORD=your_mysql_password
```
Then create the database in MySQL:
```sql
CREATE DATABASE edubuddy;
```

### 5. Run database migrations
```bash
php artisan migrate
```
This creates the `users` and `personal_access_tokens` tables.

### 6. Start the development server
```bash
php artisan serve
```
Open **http://localhost:8000** in your browser. ✅

---

## Project Structure

```
app/Http/Controllers/
├── AuthController.php          ← Web login / register / logout
├── DashboardController.php     ← Protected dashboard
└── Api/
    ├── AuthController.php      ← JSON API: POST /api/login, /api/register
    └── UserController.php      ← JSON API: GET /api/user, PUT /api/user

resources/views/
├── layouts/app.blade.php       ← Base HTML layout
├── landing.blade.php           ← Landing page (Hero, Features, Register form)
├── dashboard.blade.php         ← User dashboard (protected)
├── auth/
│   ├── login.blade.php
│   └── register.blade.php
└── partials/
    ├── navigation.blade.php
    ├── footer.blade.php
    └── icon.blade.php

public/
├── css/app.css                 ← All styles
├── js/app.js                   ← Shared JS (nav, scroll reveal)
├── js/landing.js               ← GSAP animations (landing only)
└── images/                     ← All site images

routes/
├── web.php                     ← Browser routes (HTML pages)
└── api.php                     ← API routes (JSON responses)

database/migrations/
├── ..._create_users_table.php
└── ..._create_personal_access_tokens_table.php
```

---

## Routes Reference

### Web (Browser)
| Method | URL | Description |
|--------|-----|-------------|
| GET | `/` | Landing page |
| GET | `/login` | Login form |
| POST | `/login` | Process login |
| GET | `/register` | Register form |
| POST | `/register` | Process registration |
| POST | `/logout` | Logout (auth required) |
| GET | `/dashboard` | User dashboard (auth required) |

### API (JSON)
| Method | URL | Auth | Description |
|--------|-----|------|-------------|
| POST | `/api/register` | — | Create account, returns token |
| POST | `/api/login` | — | Login, returns token |
| GET | `/api/user` | Bearer token | Get current user |
| PUT | `/api/user` | Bearer token | Update name/email/password |
| POST | `/api/logout` | Bearer token | Revoke token |

#### Example API call (cURL)
```bash
# Register
curl -X POST http://localhost:8000/api/register \
  -H "Content-Type: application/json" \
  -d '{"name":"Alice","email":"alice@uni.edu","password":"secret123","password_confirmation":"secret123"}'

# Login
curl -X POST http://localhost:8000/api/login \
  -H "Content-Type: application/json" \
  -d '{"email":"alice@uni.edu","password":"secret123"}'

# Get user (use token from login response)
curl http://localhost:8000/api/user \
  -H "Authorization: Bearer YOUR_TOKEN_HERE"
```

---

## Common Issues

| Problem | Fix |
|---------|-----|
| `composer: command not found` | Install Composer from getcomposer.org |
| `php: command not found` | Install PHP or use Laragon |
| `SQLSTATE: Access denied` | Check DB_USERNAME and DB_PASSWORD in `.env` |
| `No application encryption key` | Run `php artisan key:generate` |
| Images not loading | Make sure you're in the right folder; images are in `public/images/` |
| Port 8000 in use | Run `php artisan serve --port=8080` |
| 419 Page Expired (on form submit) | Ensure `@csrf` is in forms and session driver is set |

---

## Next Steps (to build out)

1. **Email verification** – add `MustVerifyEmail` to `User.php`
2. **Password reset** – `php artisan make:controller Auth/PasswordResetController`
3. **Courses/Exams models** – `php artisan make:model Course -m`
4. **Admin panel** – consider [Filament](https://filamentphp.com) (free, Laravel-native)
5. **Deploy** – push to a PHP host (Hostinger, cPanel) or use Laravel Forge

---

Happy building! 🎓
