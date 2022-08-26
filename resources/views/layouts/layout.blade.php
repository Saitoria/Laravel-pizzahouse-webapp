<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="main-container">
        <div class="submain-container"> 

            @yield('content')
            
        <footer>
                copyright 2022 pizza house
        </footer>
        </div>
        </div>
    </body>
</html>