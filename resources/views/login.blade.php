<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="user_id" content="{{ optional(Auth::user())->id }}">
        <title>Login</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body >
    <div id="app">
                <shop-component></shop-component>
            </div>
    </body>

    <script src="{{ mix('js/app.js') }}"></script>
</html>
