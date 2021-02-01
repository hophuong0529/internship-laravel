<!DOCTYPE HTML>
<html lang="">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a7e8114d11.js" crossorigin="anonymous"></script>
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    @yield('style')
</head>
<body>
@include('layouts.header')
<div>
    @yield('content')
</div>
@include('layouts.footer')
</body>
</html>
