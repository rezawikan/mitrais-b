# mitrais-b

This is backend server for <a href="https://github.com/rezawikan/mitrais-f" target="_blank">mitrais-f</a>. Setup the backend first then continue to frontend.

## Project setup
```
git clone https://github.com/rezawikan/mitrais-b.git
```

### Install depedencies
```
composer install
```

### Setup Database
setup your database environment in .env file (root)
```
DB_DATABASE=your_database
DB_USERNAME=your_usename
DB_PASSWORD=your_password
```
then you should make migration to your database
```
php artisan migrate
```

### Generate App Key
```
php artisan key:generate
```

The last thing, you can run your server.
