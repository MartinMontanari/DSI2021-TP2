<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Instrucciones de Instalación

Este documento describe los pasos necesarios para configurar el entorno de desarrollo en la PC local bajo sistemas operativos Linux utilizando Docker.

### Pre instalación del Proyecto.

* Tener instalado Git.
* Tener instalado Composer.
* Tener instalado php-client php-mbstring.

### Clonar Repositorio de GitHub.

### Realizar la instalación de composer en el proyecto.
```
https://getcomposer.org/download/
```
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
PD: Tener en cuenta que el hash de arriba siempre se actualiza por lo que es mejor entrar a la página de composer.

#### Copiamos el `composer.phar` de instalación que nos proveen los comandos anteriores en la carpeta raíz del proyecto (`sportivo/`)

### Instalación de los contenedores de Docker.
* Primeramente tener `docker` y `docker-compose` instalados (utilizar las guías de Digital Ocean estan bien documentadas).

1. Entrar a la carpeta de docker del proyecto. (`DSI2021-TP2/docker`)

2. Realizar un `docker-compose pull`

3. Realizar un `docker-compose up` (Al realizar este comando en un momento queda clavado el proceso porque ya termino, debemos cancelarlo al proceso con `Ctrl + C`)

4. Encender los contenedores con `docker-compose start`

5. Listo ya se encuentra levantado el servidor y la base de datos (MySQL).

### Asignación de los permisos de Laravel.
Es necesario para la correcta visualización y funcionamiento del proyecto que se asignen los siguientes permisos en la carpeta raíz del proyecto (`sportivo/`):

```
    sudo chown -R 1000:33 storage/
    sudo chmod -R g+w storage/
    sudo chown -R 1000:33 bootstrap/cache
    sudo chmod -R g+w bootstrap/cache
```

PD: Puede suceder que en momentos al crearse archivos de Logs nuevos tengamos que reasignar los permisos al storage/ (ver como solucionar esto, muchas veces al terminar la instalación del proyecto necesitamos asignar de nuevo estos permisos).

### Instalación de las dependencias.
1. Nos ubicamos en la carpeta de docker del proyecto (`docker`)

2. Acceder al Lord Commander (Ricky Fort) ejecutando `./webapp` (basicamente es nuestro bash de nginx `docker-compose run --user=1000 phpnginx bash`)

3. Ejecutamos `./composer.phar install`

4. Esperar la instalación de dependencias de Laravel y compañía.

### Crear archivo de Enviroment
1. Crear un archivo ```.env```
2. Copiar lo que existe en el ```.env.example```
3. Podemos hacerlo automáticamente con el comando ```cp .env.example .env```
4. Este archivo contiene las credenciales de las cuentas de los servicios utilizados.

### Configuración de la Base de Datos.
1. Instalar mysql-client

2. Ejecutamos `docker exec -it doclacade_mysql_1 bash` (con esto ingresamos a mysql del docker)

4. Ejecutamos `mysql -uroot -psecret`

5. Creamos la BD: `create database sportivo;`

6. Verificamos la creación de la misma con: `show databases;`

7. Salimos si la creamos con éxito.

### Ejecución de las migraciones (Laravel)
0. Primeramente actualizar el archivo `.env` con los datos correspondientes de la BD:

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=tp2
DB_USERNAME=test
DB_PASSWORD=test
```

1. Entramos al `bash nginx` del Lord Commander ubicados en `DS12021-TP2/docker` ejecutar: `./webapp`.

2. Ejecutamos dentro del bash `php artisan migrate`

3. Una vez terminada la ejecución ya tendremos las tablas correspondientes en nuestra base de datos `tp2`.

4. Ejecutar para tener el `.env` completo y correcto `php artisan key:generate`.

5. Listo ya podemos salir del comandante.

### Ultimos pasos.
1. Ya podemos entrar al sitio `localhost`

2. Deberíamos visualizar correctamente el sitio de bienvenida (O algun Health Check en el caso de ser API).
