### SED_G9

This section explains the web application designed for the Security in Development Environments project, developed with the PHP programming language and then transferred to the RHEL server to apply the appropriate security.

### Run Project on Windows

The steps to follow for the compilation of the project are:
- You need to download ```Xampp``` to run ```APACHE``` service,here is the link https://www.apachefriends.org/es/index.html
- Then you'll find Xampp in your local C drive, then you must open ```XAMPP Control``` to open the server options and in them you'll find ```Apache``` and ```MySQL``` that are the necessary to open the application. Then inside the location folder look for ```htdocs``` to clone the repository in that path and so the server will place it in the default localhost (he is in charge of opening it in any browser)
- If you want to see everything related to the code, you must open it in your preferred code editor (we recommend using VSCode because it is so powerful).
- To raise the database manager in your browser just put ```localhost/phpmyadmin``` in the URL and then you should see this  https://github.com/AlexisMejia/SED_G9/blob/master/phpmyadmin.jpg 
- In the left sidebar you will find a menu with the name `New`, there you must create the database and call it ```sed```. Within them you must define the attributes of the tables```usuario``` y ```cliente```as follows https://github.com/AlexisMejia/SED_G9/blob/master/usuario.jpg , https://github.com/AlexisMejia/SED_G9/blob/master/cliente.jpg.
- To populate the table of ```usuario``` you must do the following script https://github.com/AlexisMejia/SED_G9/tree/master/sql
- Once the script to populate the table ```usuario``` is done, you must place the following URL in your browser to access the project login form ```http://localhost/SED_G9/html/loginForm.php```

### Used tools
- VSCode.
-  PHP 7.1.3.
- RHEL 7.5.
- MySQL.
- XAMPP.
- MariaDB.
