<!DOCTYPE html>
<html>
    <head>
        <title id="notification_count_titlebar">
                        @yield('title')
               </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{--- Comment : This Section Belongs to Css include Start  --}}

        @include('layout.content_css')
        

        {{--- This Section Belongs to Css include End  --}}
    </head>

    <body>
    <div class="main-out">
    <div class="main">
    <div class="page">
    <div class="top">
    <div class="header">

        @include('layout.navigation')

        
        @yield('content')

        @include('layout.content_js')


    </body>
</html>