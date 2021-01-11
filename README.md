# LARAVEL 7.X

### TIKER
- php artisan tinker
-- factory(App\User::class, 12)->create()

### LARAVEL LANG ES VALIDATIONS

- config\app -> locale => 'es'

- resource\lang -> create folder 'es'
               -> capy and paste 'es/validations.php' from https://github.com/Laravel-Lang/lang
               -> run 'php artisan config:cache' to watch changes