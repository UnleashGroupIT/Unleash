<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Admin | @yield('title')</title>

	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

		@yield('customcss')

    </head>
    <body>

       @yield('content')

		@yield('customscripts')
    </body>
</html>