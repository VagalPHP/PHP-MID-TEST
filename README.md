## PHP MID TEST - VINÍCIUS OLIVEIRA


## Summary
- **[Quick Start](#quick-start)**.
  - [Environment with Docker](#for-environment-with-docker)
  - [Environment without Docker](#for-environment-without-docker)
  - [Using the Application](#using-the-application)

# Quick Start

## For environment with Docker

### Build the Sail containers

```sh
./vendor/bin/sail up
```

### Install package dependences

```sh
./vendor/bin/sail composer install
```


### Execute tests

This command will execute the project tests (for used Services, at this moment).

```sh
./vendor/bin/sail artisan test
```

## For environment without Docker
In this case, you will need to have a local PHP server. For example: XAMPP, WAMP, MAMP, etc.

### Install package dependences

```sh
composer install
```
### Execute tests

This command will execute the project tests (for used Services, at this moment).

```sh
php artisan test
```

### Using the Application

If you choose the installation in environment with Docker, just go to your navigator and type on the URL field:

```http request
http://localhost
```

Otherwise, you need to check your local server configuration and paths to obtain the project endpoint.

