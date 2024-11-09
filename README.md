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
   git clone https://github.com/jhonFierce/productos_admin.git
   cd products_admin

2. Instala las dependencias con Composer:
    composer install

3. Configura tu archivo .env:

    - Copia el archivo de ejemplo .env.example a .env. (Es decir copialo y solo renombralo a .env)
    - Configura tus credenciales de MySQL (usuario, contraseña y nombre de la base de datos).
    - En mi caso quedan así:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=products_admin
    DB_USERNAME=root
    DB_PASSWORD=

    Cambia esta propiedad igual en .env:
    APP_KEY=base64:4oR7sjmlP5eDDGkr7Z+tQLN5LYiPQHr5759G5I+C1Us=

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

        o

        composer run dev

    El servidor se ejecutará en la URL: http://127.0.0.1:8000
        la api queda en http://127.0.0.1:8000/api

    También puedes montar el proyecto en un servidor Apache como XAMPP. Simplemente descomprime el proyecto en la carpeta htdocs y accede a la API en:

        http://localhost/products_admin/public/api/

## Endpoints de la API
La API sigue una estructura RESTful para gestionar productos y categorías, los id son númericos. A continuación, se documentan los endpoints disponibles.

El cuerpo en general es el mostrado a continuación con las propiedades rating_rate y rating_count opcionales y se inicializan en null, 
modifique estas propiedades en un post o un put para generar los resultados deseados, no es necesario enviar todas las ropiedades en un put(update), solo envíe las que requiera modificar:

nota: El rating rate fue deducido que abarca de 0 a 5 como si fueran estrellas, esta validación (restricción esta contemplada) y si se usa un valor mayor o incompatible, el post o put no se ejecutará. 

```json
{
        "id": 1,
        "title": "Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops",
        "price": "109.95",
        "description": "Your perfect pack for everyday use and walks in the forest...",
        "category_id": 3,
        "image": "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
        "rating_rate": "3.9",
        "rating_count": 120
}
```

Se comparte un archivo en la raiz del proyecto: productos_admin.postman_collection.json para usar con postman o compatibles
contiene dos carpetas on_xampp probado en xampp y on_vite probado con php artisan serve o composer run dev que se puede ejecutar en la raiz del proyecto.

1. Listar Productos
Endpoint: GET /api/products
Descripción: Devuelve una lista de todos los productos.

2. Crear un Producto
Endpoint: POST /api/products
Descripción: Crea un nuevo producto.

3. Actualizar un Producto
Endpoint: PUT /api/products/{id}
Descripción: Actualiza un producto existente.

4. Eliminar un Producto
Endpoint: DELETE /api/products/{id}
Descripción: Elimina un producto por su ID.

5. Detalles un productos
Endpoint: GET /api/products/{id}
Descripción: Devuelve los detalles de un producto.

