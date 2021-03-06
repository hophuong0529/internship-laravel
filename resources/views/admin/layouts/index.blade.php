<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('public/lib/font-awesome/css/font-awesome.css" rel="stylesheet') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/lib/gritter/css/jquery.gritter.css') }}" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('public/css/admin-style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style-responsive.css') }}" rel="stylesheet">
    <script src="{{ asset('public/lib/chart-master/Chart.js') }}"></script>
    <script src="{{ asset('public/lib/jquery/jquery.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/a7e8114d11.js" crossorigin="anonymous"></script>
    @yield('style')
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

<script src="{{ asset('public/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script class="include" type="text/javascript" src="{{ asset('public/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('public/lib/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('public/lib/jquery.nicescroll.js') }}" type="text/javascript'"></script>
<script src="{{ asset('public/lib/jquery.sparkline.js') }}"></script>
<!--common script for all pages-->
<script src="{{ asset('public/lib/common-scripts.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/lib/gritter/js/jquery.gritter.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/lib/gritter-conf.js') }}"></script>
<script src="{{ asset('public/lib/sparkline-chart.js') }}"></script>
<script src="{{ asset('public/lib/zabuto_calendar.js') }}"></script>
<script type="application/javascript">
    $(document).ready(function() {
        $("#date-popover").popover({
            html: true,
            trigger: "manual"
        });
        $("#date-popover").hide();
        $("#date-popover").click(function() {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [{
                type: "text",
                label: "Special event",
                badge: "00"
            },
                {
                    type: "block",
                    label: "Regular event",
                }
            ]
        });
    });

    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
</body>
</html>
