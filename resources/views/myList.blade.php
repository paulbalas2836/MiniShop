<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="user_id" content="{{ optional(Auth::user())->id }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyItems</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body >
    <div id="app">
                <my-list-component></my-list-component>
            </div>
    </body>

    <script src="{{ mix('js/app.js') }}"></script>
</html>