# ChileAtiende

## Requisitos.

+ php >= 7.0.0
+ OpenSSL PHP Extension
+ PDO PHP Extension
+ Mbstring PHP Extension
+ Tokenizer PHP Extension
+ XML PHP Extension
+ mysql
+ composer
+ node

## Instalación

+ Copiar el archivo `.env.example` a `.env` y editar las variables de configuración de acuerdo a tu servidor:

```
cp .env.example .env
```


+ Hacer la instalación de las librerias PHP necesarias:

```
composer install
```


+ Generar la llave de instalación

```
php artisan key:generate
```


+ Generar los links simbolicos para acceder a la carpeta de storage de imagenes desde la web pública.

```
php artisan storage:link
```


+ Instalar de las librerias JS necesarias:

```
npm install
```


+ Compilación de JS (solo producción)

```
npm run prod
```


### base de datos

+ local

Crea la base de datos desde el cli de mysql, la estructura a restaurar se encuentra en `database/structure.sql`, luego corre las migraciones de Laravel

```
php artisan migrate
```


+ remota

Agrega la configuración a la base de datos remota en el archivo `.env`


## Ejecución

+ Ejecutar el proyecto.

```
php artisan serve
```


+ Ejecutar compilación de assets.

```
npm run watch
```


## Elasticsearch

+ Para crear el indice:

```
php artisan elasticsearch:admin create
```


+ Para indexar todo (Realizar esto en instalación inicial):

```
php artisan elasticsearch:admin index
```


+ Para indexar solo páginas:

```
php artisan elasticsearch:admin index pages
```


+ Para indexar solo sugerencias de búsqueda (Esto es recomendable dejarlo en un cron cada día para ir recalculando las sugerencias de acuerdo a las búsquedas populares de los usuarios):

```
php artisan elasticsearch:admin index suggestions
```


## Algoritmo Machine Learning para similitud de fichas

+ Es recomendable dejar en un cron todos los días este comando para calcular las fichas similares de acuerdo a las visitas de los usuarios.

```
php artisan ml:similarity
```
