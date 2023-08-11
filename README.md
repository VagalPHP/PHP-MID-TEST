## PHP MID TEST - VINÍCIUS OLIVEIRA


## Summary
- **[Quick Start](#quick-start)**.
  - [Systems with Docker](#for-systems-with-docker)
  - [Systems without Docker](#for-systems-without-docker)

# Quick Start

## For systems with Docker

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

## For systems without Docker
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

