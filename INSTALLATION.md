
1. First, create a new Laravel project:
```bash
composer create-project laravel/laravel your-app-name
cd your-app-name
```

2. Install the required Node.js dependencies with npm:
```bash
npm install
```

3. Install Tailwind CSS v3 specifically (along with its dependencies):
```bash
npm install -D tailwindcss@^3 postcss@latest autoprefixer@latest
```

4. Create the tailwind.config.js file in your project root:
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

5. Create postcss.config.js in your project root:
```javascript
export default {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
    },
}
```

6. Configure your CSS. Replace the contents of resources/css/app.css with:
```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

7. Make sure your vite.config.js looks like this:
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

8. Update your layout file (e.g., resources/views/layouts/app.blade.php) to include Vite:
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

9. Build your assets:
```bash
# For development
npm run dev

# For production
npm run build
```

10. Start your Laravel development server:
```bash
php artisan serve
```

To test if everything is working:

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
`cp .env.example .env`
`DB_CONNECTION=none`
`php artisan key:generate`


Common troubleshooting steps if styles aren't appearing:
- Make sure npm run dev is running in the background
- Clear your browser cache
- Check browser console for any errors
- Verify that your layout file includes the @vite directive correctly
- Ensure all paths in tailwind.config.js content array are correct
- Check that all configuration files are in the root directory of your project

