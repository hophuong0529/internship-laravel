<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>@yield('title')</title>

    <!-- Favicons -->
    <link href="{{ asset('public/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('public/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('public/lib/font-awesome/css/font-awesome.css" rel="stylesheet') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/zabuto_calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/lib/gritter/css/jquery.gritter.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/lib/bootstrap-fileupload/bootstrap-fileupload.') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/lib/bootstrap-datepicker/css/datepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/lib/bootstrap-daterangepicker/daterangepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/lib/bootstrap-timepicker/compiled/timepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/lib/bootstrap-datetimepicker/datertimepicker.css') }}" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('public/css/admin-style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style-responsive.css') }}" rel="stylesheet">
    <script src="{{ asset('public/lib/chart-master/Chart.js') }}"></script>
    <script src="https://kit.fontawesome.com/a7e8114d11.js" crossorigin="anonymous"></script>
</head>
<body>
<section id="container">
    @include('admin.layouts.header')

    @include('admin.layouts.left')
    <section id="main-content">
        <section class="wrapper">
    @yield('content')
        </section>
    </section>

    @include('admin.layouts.footer')
</section>
</body>
</html>
