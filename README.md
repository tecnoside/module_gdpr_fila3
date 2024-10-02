# GDPR Module

[![Latest Version on Packagist](https://img.shields.io/packagist/v/your-org/gdpr-module.svg?style=flat-square)](https://packagist.org/packages/your-org/gdpr-module)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/your-org/gdpr-module/run-tests?label=tests)](https://github.com/your-org/gdpr-module/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/your-org/gdpr-module/Check%20&%20fix%20styling?label=code%20style)](https://github.com/your-org/gdpr-module/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/your-org/gdpr-module.svg?style=flat-square)](https://packagist.org/packages/your-org/gdpr-module)

A module designed to help your application comply with the General Data Protection Regulation (GDPR). This module simplifies the process of managing user data, cookie consent, and data access requests, ensuring that your app stays compliant with European data protection laws.

## Main Features

- **Cookie Consent Banner**: Display a customizable cookie consent banner to visitors.
- **User Data Export**: Allow users to request and download their personal data.
- **Data Deletion Requests**: Provide users with an option to request the deletion of their data.
- **Log and Track User Consent**: Keep a record of user consent for data processing.
- **Anonymization of User Data**: Anonymize personal data after a defined period of inactivity.

## Prerequisites

- PHP v8+
- Laravel v8+
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
If necessary, enable it:
```bash
php artisan module:enable Gdpr
```

## Run the Migrations
```bash
php artisan module:migrate Gdpr
```