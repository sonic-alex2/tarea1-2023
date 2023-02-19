# Tarea #1 Analisis de sistemas - 2023
<p align="left">
   <img src="https://img.shields.io/badge/STATUS-EN%20DESAROLLO-green">
</p>

![GitHub Org's stars](https://img.shields.io/github/stars/sonic-alex2?style=social)

![foto de cabecera](https://cdn.pixabay.com/photo/2017/03/18/01/07/willow-catkin-2152984_960_720.jpg)


## Para correr el proyecto localmente

```php
#Se debe de tener instalado php, y mysql
#(se asume que el usuario mysql es root y esta sin contraseña)
#si no editar los siguiente datos (en el archivo):
DB_DATABASE=nombreDeBaseDeDatosQueCreaste
DB_USERNAME=usurioCreado
DB_PASSWORD=passwordCreado

#lo anterior en mi maquina local

#Crear un archivo con extencion ".env"
#Pegar los siguiente, en el archivo creado:
APP_NAME=tarea-numeros-primo
APP_ENV=local
APP_KEY=base64:MdrqU37Vj3ecZYpSZaT1cATxgVHcE+mqZq2PLrUmwYU=
APP_DEBUG=true
APP_URL=http://tarea-numeros-primo

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tarea-numeros-primo
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

#Por ultimo Correr el siguiente comando (se debe de tener como variable global en windows "php"):
#se debe de correr el comando en la misma ubicacion que la raiz del todo el proyecto.

# --> crea las tablas necesarias(si ya esta creada la base de datos y con los accesos correctos, con los servidor mysql funcionando)
$ php artisan migrate:fresh

#pone en ejecucion la aplicacion.
$ php artisan serve

#saldra un mensaje similar al siguiente:
 INFO  Server running on [http://127.0.0.1:8000].

#Crear un usario en el apartado "Register" (o similar)
http://127.0.0.1:8000/register

```


## Autores

| [<img src="#" width=115><br><sub>Jorge Ramos</sub>](https://github.com/sonic-alex2) |  [<img src="#" width=115><br><sub>Otro User</sub>]([https://github.com/sonic-alex2](https://github.com/ellenpimentel)) |  [<img src="#" width=115><br><sub>Otro user</sub>](https://github.com/sonic-alex2) |
| :---: | :---: | :---: |
