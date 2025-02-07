# How to build a airport demo laravel app with blades and tailwind

## Note:
- If starting fresh this is the create command you can use...
`composer create-project laravel/laravel airport-demo`
`cd airport-demo`

2. Install the required Node.js dependencies with npm:
`npm install`

3. If Dev dependencies not already installed, Install Tailwind CSS v3 specifically (along with its dependencies):
`npm install -D tailwindcss@^3 postcss@latest autoprefixer@latest`

4. Install Composer modules
`composer install`

5. Create the tailwind.config.js file in your project root:
```javascript
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

6. Create postcss.config.js in your project root:
```javascript
export default {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
    },
}
```

7. Configure your CSS. Replace the contents of resources/css/app.css with:
```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

8. Make sure your vite.config.js looks like this:
```javascript
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```

8. Update your layout file (e.g., resources/views/layouts/app.blade.php) to include @vite with resources:
```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @yield('content')
</body>
</html>
```
9. Create the Flight model:
`php artisan make:model Flight`

NOTE: using the -m flag to make a migration
- we already have a table schema we will be using but if you don't...
The command `php artisan make:model Flight -m` creates:
1. Model class `Flight.php` in `app/Models`
2. Migration file in `database/migrations` (the `-m` flag)

Example output:
```php
<?php 
# app/Models/Flight.php
class Flight extends Model
{
    // add the following

    protected $fillable = [
        'flight_number',
        'airline',
        'status',
        'scheduled_time',
        'origin',         
        'destination',
        'terminal',
        'gate'
    ];

    public $timestamps = false;
}
```
----------------------------------

10. Make the Flight Controller
`php artisan make:controller FlightController`

- in the flight controller make sure to use the Flight Model
- assign the variables you want to use in your app from the sql methods you want to use
-------------
```php
<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $arriving_flights = Flight::where('status', 'arriving')
            ->orderBy('scheduled_time')
            ->get();
        
        $departing_flights = Flight::where('status', 'departing')
            ->orderBy('scheduled_time')
            ->get();

        return view('flights.index', compact('arriving_flights', 'departing_flights'));
    }
}
```
-------------
11. Copy the example .env.example file
`cp .env.example .env`

12. Modify your .env file to utilize the intended database with credentials
- optional: import a sql file into your local mysql 
`mysql -u <USER> -p < db_filename.sql`

13. Run `php artisan:key generate` to assign a key to your app

14. Build your assets:
```bash
# For development
npm run dev

# For production
npm run build
```
15. Make a `flights/` directory in `resources/views`

16. create an index.blade.php file in `resources/views/flights/`

17. to see the blade working put the minum following code
```php
@extends('layouts.app')

@section('title', 'Flights')

@section('content')
  <div>
            @foreach($arriving_flights as $flight)
                    <p>{{ $flight->flight_number }}</p>
            @endforeach
  </div>
@endsection
```
18. Start your Laravel development server:
```bash
php artisan serve
```

To test if everything is working:
19. Navigate to localhost:8000/flights

NOTE: Other things to test
1. Create a test blade file (e.g., resources/views/welcome.blade.php):
```php
@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100">
    <div class="p-6">
        <h1 class="text-3xl font-bold text-gray-900">
            Welcome to Laravel with Tailwind CSS
        </h1>
        <p class="mt-4 text-gray-600">
            If you can see this styled text, Tailwind CSS is working!
        </p>
    </div>
</div>
@endsection
```

2. Create a route in routes/web.php:
```php
Route::get('/', function () {
    return view('welcome');
});
```
Common troubleshooting steps if styles aren't appearing:
- Make sure npm run dev is running in the background
- Clear your browser cache
- Check browser console for any errors
- Verify that your layout file includes the @vite directive correctly
- Ensure all paths in tailwind.config.js content array are correct
- Check that all configuration files are in the root directory of your project


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

- in another terminal
```bash
php artisan serve
```
