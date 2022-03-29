# Laravel Todo App

## Installing
1. Write permissions:
    ~~~
    sudo chmod -R 777 storage
    sudo chmod -R 777 bootstrap/cache
    ~~~

2. Install dependencies:
	~~~
    composer install
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
## Requirements

### Objetive  
Develop an application in Laravel that implements the basic principles already seen in the handling of views, routes, controllers and data access.  
### Development  
- Create in DB the table "todos", which will have the columns: id (int PK autoincrement), todo (varchar(512) NOT NULL), done (int NOT NULL).    
- Make an "all" view where all the ToDos are displayed. These can be displayed in table format. It must be linked to a controller to fetch the records from the DB.    
- Make the functionality to add a new ToDo, this can be in another view or a single text field and an add button in the main view. Adding should return or display the record of the added ToDo in the table of the "all" view. When adding, the ToDo is in pending status.    
- Make a view to edit a ToDo, from the list you can show an [Edit] link and this redirect to another page where you can edit the selected ToDo, when saving you must update the record in DB and redirect to the page/view all.  
- In the main ToDos list, implement the functionality to update the status to done. Also implement the functionality to return the status to pending.  
- In the main list, implement the option to delete a ToDo.  
### Deliverables
Images of the application running, with all the functionalities.  
Source code of the project in a ZIP file.  
