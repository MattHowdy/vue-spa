<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="/css/app.css">
        <title>My App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    </head>
    <body>

        

        <div id="app">
                @include('layouts.header')
           
                <section class="section">
                    <div class="container">
                        <router-view></router-view>
                    </div>
                </section>
        </div>

        
    </body>

    <script src="/js/app.js"></script>
</html>
