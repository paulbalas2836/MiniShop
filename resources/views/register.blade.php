<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="user_id" content="{{ optional(Auth::user())->id }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>Register</title>

    </head>
    <body >
        <div id="app">
            <register-component><register-component />
       </div>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
