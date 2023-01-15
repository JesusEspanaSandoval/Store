# Ecomerce Laravel
## Local setup
``` bash
composer install
pnpm install

mv .env.example .env
```
Edit the .env
``` dosini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eComerce
DB_USERNAME=[Your username]
DB_PASSWORD=[The password of your user]
```
Migrate
``` bash
php artisan migrate
```
Finally you can start the project
``` bash
php artisan serve & pnpm dev
```
