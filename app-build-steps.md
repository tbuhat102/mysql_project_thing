Here are all the artisan commands you'll need to run in order:

1. Create the model with migration:
```bash
php artisan make:model Flight -m
```

2. Create the controller:
```bash
php artisan make:controller FlightController
```

3. After adding your migration details, run the migration:
```bash
php artisan migrate
```

4. If you need to seed the database with the test data, create a seeder:
```bash
php artisan make:seeder FlightSeeder
```

5. Then run the seeder:
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