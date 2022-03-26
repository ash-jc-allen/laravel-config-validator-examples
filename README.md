This repo contains examples of how the Laravel Config Validator package works in a Laravel application. There are some dummy values set up specifically to throw errors and cause failures.

# Valid Commands

This command will pass without any errors:

```
php artisan config:validate --files=view
```

# Invalid Commands

This command will run all the validation rules and fail:

```
php artisan config:validate
```

This command will run only the 'app' config validation and fail:

```
php artisan config:validate --files=app
```

This command will fail because the directory does not exist in the project:

```
php artisan config:validate --path=invalid_path
```

This command will fail because the directory is empty:

```
php artisan config:validate --path=config-validation/empty
```
