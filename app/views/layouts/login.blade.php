<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>eDirektori MADA - {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    {{--<link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">--}}

    {{ HTML::style('css/bootstrap-cerulean.min.css') }}
    {{ HTML::style('css/charisma-app.css') }}
    {{ HTML ::style('bower_components/fullcalendar/dist/fullcalendar.css') }}
    {{ HTML ::style('bower_components/fullcalendar/dist/fullcalendar.print.css') }}
    {{ HTML ::style('bower_components/chosen/chosen.min.css') }}
    {{ HTML ::style('bower_components/colorbox/example3/colorbox.css') }}
    {{ HTML ::style('bower_components/responsive-tables/responsive-tables.css') }}
    {{ HTML ::style('bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css') }}
    {{ HTML ::style('css/jquery.noty.css') }}
    {{ HTML ::style('css/noty_theme_default.css') }}
    {{ HTML ::style('css/elfinder.min.css') }}
    {{ HTML ::style('css/elfinder.theme.css') }}
    {{ HTML ::style('css/jquery.iphone.toggle.css') }}
    {{ HTML ::style('css/uploadify.css') }}
    {{ HTML ::style('css/animate.min.css') }}
    {{ HTML ::style('css/collapse-styles.css') }}
    {{ HTML::script('js/collapse-script.js') }}

    <!-- jQuery -->
    {{--<script src="bower_components/jquery/jquery.min.js"></script>--}}
    {{ HTML::script('bower_components/jquery/jquery.min.js') }}
    <link rel="shortcut icon" href="http://laravel.com/img/favicon.png">


</head>

<body>
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>eDirektori MADA </h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                [ <a href="http://web.mada.gov.my/direktori2/">e-Direktori Versi Lama</a> ]

            </div>
            <div class="alert alert-info">
                [ <a href="{{ URL::route('carian-umum-staff') }}">Carian Staff</a> ]
                [ <a href="{{ URL::route('carian-umum-syarikat') }}">Carian Syarikat</a> ]

            </div>
            @yield('content')
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

{{ HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
{{ HTML::script('js/jquery.cookie.js') }}
{{ HTML::script('bower_components/moment/min/moment.min.js') }}
{{ HTML::script('bower_components/fullcalendar/dist/fullcalendar.min.js') }}
{{ HTML::script('js/jquery.dataTables.min.js') }}
{{ HTML::script('bower_components/chosen/chosen.jquery.min.js') }}
{{ HTML::script('bower_components/colorbox/jquery.colorbox-min.js') }}
{{ HTML::script('js/jquery.noty.js') }}
{{ HTML::script('bower_components/responsive-tables/responsive-tables.js') }}
{{ HTML::script('bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js') }}
{{ HTML::script('js/jquery.raty.min.js') }}
{{ HTML::script('js/jquery.iphone.toggle.js') }}
{{ HTML::script('js/jquery.autogrow-textarea.js') }}
{{ HTML::script('js/jquery.uploadify-3.1.min.js') }}
{{ HTML::script('js/jquery.history.js') }}
{{ HTML::script('js/charisma.js') }}


</body>
</html>
