Here are all the laravel/artisan commands you'll need to run in order:
```bash
npm install
```
```bash
npm install -D tailwindcss@^3 postcss@latest autoprefixer@latest
```
```bash
composer install
```
```bash
npm run build
```
```bash
npm run dev
```

- Create the model with migration:
```bash
php artisan make:model Flight -m
```

The command `php artisan make:model Flight -m` creates:
1. Model class `Flight.php` in `app/Models`
2. Migration file in `database/migrations` (the `-m` flag)

Example output:
```php
// app/Models/Flight.php
class Flight extends Model
{
    //
}

// database/migrations/xxxx_xx_xx_create_flights_table.php
public function up()
{
    Schema::create('flights', table => {
        $table->id();
        $table->timestamps();
    });
}
```
----------------------------------
- Create the controller:
```bash
php artisan make:controller FlightController
```

`cp .env.example .env`
`DB_CONNECTION=none`
`php artisan key:generate`
```bash
mysql -u <USER> -p < database_filename.sql
```
- add in the necessary database connections to the `.env`

- OPTIONAL
- After adding your migration details, run the migration:
```bash
php artisan migrate
```
- If necessary and you need to seed the database with the test data, create a seeder:
```bash
php artisan make:seeder FlightSeeder
```

- If necessary: run the seeder:
```bash
php artisan db:seed
```

Optional but helpful commands:
- If you need to rollback and re-run migrations:
```bash
php artisan migrate:refresh
```

- If you want to clear cache after making changes:
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

- To check your routes are registered correctly:
```bash
php artisan route:list
```

Make sure your MySQL server is running before executing these commands. Let me know if you need help with any of these steps!
- in another terminal
```bash
php artisan serve
```