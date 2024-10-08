# Module Gdpr
[![Latest Version on Packagist](https://img.shields.io/packagist/v/laraxot/module_gdpr_fila3.svg?style=flat-square)](https://packagist.org/packages/laraxot/module_gdpr_fila3)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/laraxot/module_gdpr_fila3/run-tests?label=tests)](https://github.com/laraxot/module_gdpr_fila3/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/laraxot/module_gdpr_fila3/Check%20&%20fix%20styling?label=code%20style)](https://github.com/laraxot/module_gdpr_fila3/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/laraxot/module_gdpr_fila3.svg?style=flat-square)](https://packagist.org/packages/laraxot/module_gdpr_fila3)

The **GDPR Fila3** module is designed to help developers and businesses comply with GDPR regulations. It provides tools and features to manage users' personal data, ensuring that it is processed securely and transparently.

## Prerequisites
- php v8+
- laravel
- **[Xot Module](https://github.com/laraxot/module_xot_fila3.git)** (Required)
- **[Tenant Module](https://github.com/laraxot/module_tenant_fila3.git)** (Required)
- **[UI Module](https://github.com/laraxot/module_ui_fila3.git)** (Required)

## Add Module to the Project Base
Inside the `laravel/Modules` folder:

```bash
git submodule add https://github.com/laraxot/module_gdpr_fila3.git Gdpr
```

## Verify the Module is Active
```bash
php artisan module:list
```
in caso abilitarlo
```bash
php artisan module:enable Gdpr
```

## Run the Migrations
```bash
php artisan module:migrate Gdpr
```