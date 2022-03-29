Download source folder from git repository
Open project folder in any command window
Run composer update in command window
Create database school in any preferred database engine(PHPadmin in use for development) 
Run the following two commands in command window. 
    php artisan key:migrate
    php artisan migrate
Once this is successfully done, rum php artisan serve
The above command makes the application avaibale to you.
Visit http://localhost:8000 to view application interface
