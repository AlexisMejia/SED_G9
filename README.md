### SED_G9

This section explains the web application designed for the Security in Development Environments project, developed with the PHP programming language, and then transferred to the RHEL server to apply the appropriate security.

### Run Project on Windows

The steps to follow for the compilation of the project are:
- You need to download Xampp to run APACHE service,here is the link https://www.apachefriends.org/es/index.html
- Then you'll find XAMPP in your local C drive, then you must open `XAMPP Control` to open the server options and in them you'll find `Apache` and `MySQL` that are the necessary to open the application. Then inside the location folder look for `htdocs` to clone the repository in that path and so the server will place it in the default localhost (he is in charge of opening it in any browser)
-If you want to see everything related to the code, you must open it in your preferred code editor (we recommend using VSCode because it is so powerful).
-To raise the database manager in your browser just put `localhost/phpmyadmin` in the URL and then you should see this  ![Screenshot](phpmyadmin.png) 


### Inicio de sesion

- La primera pantalla a mostrar es la de login,para hacer uso de la aplicacion tenemos 2 tipos de usuarios:

1. usuario administrador: este es el que se encarga de administrar los procesos de la aplicacion, y este es el unico que puede acceder a estos
atributos el inicio de sesión se hacen con admin@admin.com con contraseña administrador.

2. usuario cliente: este es el que hace uso principal de la aplicacion, a el se le restringuen los privilegios del administrador. Para este tipo
de usuario se puede acceder desde  el de cliente es cliente@cliente.com con contraseña cliente
# ntn-restaurante-api
restful api using express + mongoDB

Load environment variables before running `npm start`. (Copy `.env.sample` as `.env` and change variable values <if required>)
### Development
1. ```npm install```
2. ```npm start```
