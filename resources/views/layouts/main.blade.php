<html>
    <head>
        <title>YogaArbre - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

        <link rel="stylesheet" href="{{mix('/css/app.css')}}">
        @stack('header')
        @stack('css')
    </head>
    <body>
        @yield('menu')

        <div class="container">
            @yield('content')
        </div>
    </body> 
    @stack('js')
</html>