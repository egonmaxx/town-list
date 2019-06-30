# town-list application

Pre installation steps:  
Make sure you have installed all the required php extension  
for laravel framework.  
  
Make sure you have installed mysql database engine on you system.  
Create a database for the application for instance: laravel  
  
#Installation steps:  
1. Clone this repo.  
2. Run: composer install  
3. Create a .env file included with a row: "APP_KEY="  
   (Do not insert quotation marks)  
4. Run: php artisan key:generate  
  
Setting DB connection in laravel  
5. Edit .env file. Insert a following rows with you right parameters.  
   For instance:  
   DB_CONNECTION=mysql  
   DB_HOST=localhost  
   DB_PORT=3306  
   DB_DATABASE=laravel  
   DB_USERNAME=root  
   DB_PASSWORD=password  
  
Creating tables  
6. Run: php artisan migrate  
  
Seeding tables with startup datas  
7. Run: php artisan db:seed --class=CountiesTableSeeder  
8. Run: php artisan db:seed --class=TownsTableSeeder  
  
Finally please start the application locally.  
9. php artisan serve  
  
Type this url in your browser:  
10. http://127.0.0.1:8000/  
