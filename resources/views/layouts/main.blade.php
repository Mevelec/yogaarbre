<html>
    <head>
        <title>YogaArbre - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{mix('/css/app.css')}}">
        @stack('header')
        @stack('css')
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body> 
    @stack('js')
</html>