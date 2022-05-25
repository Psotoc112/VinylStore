# Link-beats
1. Instalación del proyecto:
```
composer install
composer update
```
2. Active su servidor apache y MySql
3. En localhost/phpMyAdmin cree la tabla "vinylstore"
4. El archivo .env debe ser:
```
DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=vinylstore
    DB_USERNAME=root
    DB_PASSWORD=root
```
5. En la ruta del proyecto:
```
php artisan migrate
php artisan key:generate
php artisan storage:link

```
Tambien puede acceder por medio del siguiente link: http://34.132.92.105/VinylStore/public/
