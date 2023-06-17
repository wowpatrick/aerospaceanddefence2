# Index Card

Replacement for the current [https://aerospaceanddefence.net](https://aerospaceanddefence.net) website Laravel 9

## Requirements
* PHP >= 8
* ext-xml
* ext-dom
* Docker
* docker-compose

## Setup
- `.env.example` to `.env`
- Run `composer install`
- Run `npm install`
- Run `./vendor/bin/sail up -d`
- Run `./vendor/bin/sail artisan migrate:install`
- Run `npm run dev`

Note: Maybe change of `DB_HOST` in `.env` to `mariadb` is needed (see https://laravel.com/docs/9.x/sail#mysql for details).

## Mailing:
- Mailhog installed via sail: http://localhost:8025

## Troubleshooting
- Permission issues: https://github.com/laravel/sail/issues/81#issuecomment-1193074520

## Used components
* Laravel Sail - Docker compose
* Laravel Breeze - Auth

## Third party packages/libs
* barryvdh/laravel-ide-helper

## Docker env:
- App: http://localhost/
- Mailhog: http://localhost:8025/

## Useful commands
Install sail: `composer require laravel/sail --dev`

Install sail services: `php artisan sail:install`

Running sail: `./vendor/bin/sail up -d`

Executing commands in sail container:

```
sail artisan queue:work
```

https://laravel.com/docs/9.x/sail#executing-sail-commands

## Interesting components:
- https://tailwindcss.com/
- https://alpinejs.dev/

## User management
- Breeze: https://laravel.com/docs/9.x/starter-kits

## Front-End
- https://inertiajs.com/
- https://laravel-livewire.com/

## Notes
Had to install PHP 8.1 and Node 14 manually:
- https://github.com/nodesource/distributions#installation-instructions
- https://help.clouding.io/hc/en-us/articles/360021630059-How-to-Install-Multiple-PHP-Versions-7-2-7-4-8-0-and-8-1-on-Ubuntu-20-04

## Sail:
Install sail: `composer require laravel/sail --dev`

Install sail services: `php artisan sail:install`

Running sail: `./vendor/bin/sail up -d`

Executing commands in sail container:

```
sail artisan queue:work
```

https://laravel.com/docs/9.x/sail#executing-sail-commands
