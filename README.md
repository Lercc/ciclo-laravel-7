# LARAVEL 7.X

### TIKER
- php artisan tinker
-- factory(App\User::class, 12)->create()

### LARAVEL LANG ES VALIDATIONS

- config\app -> locale => 'es'

- resource\lang
    1. create folder 'es'
    2. capy and paste 'es/validations.php' from https://github.com/Laravel-Lang/lang
    3. run next line to watch changes 
        <pre>php artisan config:cache</pre>

### MIDDLEWARE: FILTROS A PETICIONES HTTP
#### Capa de lógica adicional de filtrado de peticiones HTTP

- Route::resource() -> Permite gestionar 7 rutas adjutadas a un Controlador con 7 métodos.
    - NameController@show
    - NameController@destroy
    - NameController@store
    - NameController@update

- Generar un controlador:
    <pre>php artisan make:controller [NameController]</pre>

- Generar un controlador con los 7 métodos necesarios que utilizara Route::resource()
    <pre>php artisan make:controller [NameController] --resource || -r</pre>

- Generar un controlador con los 7 métodos necesarios, así como el modelo para el controlador:
    <pre>php artisan make:controller [NameController] --resource --model</pre>

- Generar un modelo con:
    - -a, --all             Generate a migration, seeder, factory, and resource controller for the model
    - -c, --controller      Create a new controller for the model
    - -f, --factory         Create a new factory for the model
    - -m, --migration       Create a new migration file for the model
    - -s, --seed            Create a new seeder file for the model
    - -r, --resource        Indicates if the generated controller should be a resource controller
    - --api             Indicates if the generated controller should be an API controller
    <pre>php artisan make:model [NameController] -a | -c | -f | -m | -s | -r | --api</pre>