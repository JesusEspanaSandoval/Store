# Store Laravel

## Local setup

```bash
composer install
pnpm install

mv .env.example .env
```

Edit the .env

```dosini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=store
DB_USERNAME=[Your username]
DB_PASSWORD=[The password of your user]
```

Migrate, generate the application key and link the storage

```bash
php artisan migrate
php artisan key:generate
php artisan storage:link
```

Finally you can start the project

Without Sail

```bash
php artisan serve & pnpm dev
```

With Sail

```bash
sail up & pnpm dev
```
