# Products Admin API

Este proyecto es una aplicación backend desarrollada en Laravel y MySQL para gestionar productos y categorías, proporcionando endpoints para crear, actualizar, eliminar y listar productos. A continuación, se detallan los pasos para configurar y ejecutar el proyecto, así como la documentación de los endpoints disponibles.

## Requisitos Previos

- PHP 8+
- Composer
- MySQL
- Apache o un servidor de desarrollo (como Laravel Sail o XAMPP)

## Instalación

1. Clona este repositorio en tu máquina local.
   ```bash
   git clone <tu-repositorio>
   cd products_admin

2. Instala las dependencias con Composer:
    composer install

3. Configura tu archivo .env:

    - Modificar el archivo .env.
    - Configura tus credenciales de MySQL (usuario, contraseña y nombre de la base de datos).
    - En mi caso quedan así:

    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=products_admin
    DB_USERNAME=root
    DB_PASSWORD=

## Migraciones y Seeders
    Para crear la base de datos y las tablas, ejecuta el siguiente comando:

        php artisan migrate

    Si la base de datos products_admin no existe, se te preguntará si deseas crearla. Escribe yes y presiona Enter.

        WARN  The database 'products_admin' does not exist on the 'mysql' connection.  
        Would you like to create it? (yes/no) [yes]

    Luego, ejecuta los seeders para poblar las tablas con datos de ejemplo:

        php artisan db:seed --class=CategoryProductSeeder

## Ejecución del Servidor

    Para ejecutar el servidor de desarrollo de Laravel, utiliza el siguiente comando:

        php artisan serve

    El servidor se ejecutará en la URL: http://127.0.0.1:8000

    También puedes montar el proyecto en un servidor Apache como XAMPP. Simplemente descomprime el proyecto en la carpeta htdocs y accede a la API en:

        http://localhost/products_admin/public/api/

