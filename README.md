# Module Gdpr
Modulo dedicato alla gestione del Gdpr

## Aggiungere Modulo nella base del progetto
Dentro la cartella laravel/Modules

```bash
git submodule add https://github.com/laraxot/module_gdpr_fila3.git Gdpr
```

## Verificare che il modulo sia attivo
```bash
php artisan module:list
```
in caso abilitarlo
```bash
php artisan module:enable Gdpr
```

## Eseguire le migrazioni
```bash
php artisan module:migrate Gdpr
```