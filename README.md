# Laravel HTTPS

Middleware that redirects users from http to https requests.

## Installation

```
composer require big-hair-energy/laravel-https
```

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```
BigHairEnergy\Https\ServiceProvider::class,
```

You'll also want to inject the https middleware by adding it your app/Http/Kernal.php file.

```
\BigHairEnergy\Https\Middleware::class,
```

Running this install command will add the https config.

```
php artisan https:install
```

## Configuration

### Enabling

HTTPS mode will be enabled by default. You can disable it at any time by adding it to your environment file

```
HTTPS_ENABLED=false
```
