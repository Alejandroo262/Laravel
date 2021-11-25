1- Para crear el proyecto de laravel he usado el siguiente comando:
    -php /User/alejandrobaeza/composer.phar create-project laravel/laravel practicalaravel

2- Para conectar con una base de datos nos vamos al archivo .env y modificamos los siguientes parámetros:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

3- Para crear los migrations ejecutamos el comando:
    -php artisan make:migration create_alumno_table

4- Para crear el seeder:
    -php artisan make:seeder SeederAlumno

5- Para crear los controllers
    -php artisan make:controller AlumnoController

6- Para crear las rutas nos vamos a "Routes/api.php" y ponemos el siguiente codigo:
    Route::prefix("alumno")->group(function () {
        Route::get('', [AlumnoController::class, 'obtenerTodos']);

        Route::post('', [AlumnoController::class, 'insertarAlumno']);

        Route::get('/{id}', [AlumnoController::class, 'obtenerAlumno']);

        Route::delete('/{id}', [AlumnoController::class, 'borrarAlumno']);

        Route::post('/{id}/editar', [AlumnoController::class, 'modificarAlumno']);

    });

7- Para crear los middleware ejecutamos el comando:
    php artisan make:middleware AgsegurarID

8- Para implementar las funciones para realizar todas las acciones especificadas por las rutas nos vamos a
"/app/Http/Controllers/AlumnoController" y en ese archivo las implementamos





