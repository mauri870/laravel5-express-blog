## Instructions
### Clone
```
git clone https://github.com/mauri870/laravel5-express-blog.git
```

### Update dependencies
```
composer install
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

### Create sqlite database
```
php artisan migrate --seed
```
