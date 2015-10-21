## Instructions
### Clone
```
git clone https://github.com/mauri870/laravel5-express-blog.git
```

### Update dependencies
```
composer install
```

### Create sqlite database
```
touch database/database.sqlite
```

### Add sqlite to .env
```
cp .env.example .env

DB_CONNECTION=sqlite
```

### Run Migrations and Seeders
```
php artisan migrate --seed
```
### Generate app key
```
php artisan key:generate
```
