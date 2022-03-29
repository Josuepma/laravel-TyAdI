# Laravel App para Tecnologías y Aplicaciones de Internet

## Installing
1. Write permissions:
    ~~~
    sudo chmod -R 777 storage
    sudo chmod -R 777 bootstrap/cache
    ~~~

2. Install dependencies:
	~~~
    composer install
    ~~~

    ~~~
    npm install
    ~~~

3. Generate configuration file
   In the root of the folder rename the file **.env.example** to **.env** or use 
    ~~~
    cp .env.example .env
    ~~~

4. Generate API Key
    ~~~
	php artisan key:generate
    ~~~

5. Migrations.
  * Create a database using phpmyadmin or the mysql console.
  * Open the .env file from point 3.
  * They are placed in the MySQL section (line 11 approx.)
  * There you edit the value of the DB_DATABASE field, placing the name of the database you created. The result is DB_DATABASE=databaseName.
  * Then just run the migrations with
    ~~~
    php artisan migrate --seed
    ~~~
    Generates migrations and populates the DB with default data
## Extra
De preferencia crear un virtualhost para que no haya problemas con las rutas.

* Para Ubuntu:
    https://simplecodetips.wordpress.com/2018/07/11/crear-virtualhost-con-xampp-en-ubuntu-18-04/
    
* Para Windows: 
    https://desarrolloweb.com/articulos/configurar-virtual-hosts-apache-windows.html

    Otra opción es correr el comando: 
    ~~~
    php artisan serve
    ~~~

[Link](https://getcomposer.org/download/) para instalar composer

[Link](https://nodejs.org/es/) para instalar nodejs

[Link](https://laravel.com/docs/8.x/readme) para la documentación de laravel
