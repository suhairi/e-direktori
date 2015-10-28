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
    <title>eDirektori - {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="eDirektori, a fully featured, responsive, HTML5, Phone direktori of MADA.">
    <meta name="author" content="Suhairi Abdul Hamid">

    <!-- The styles -->
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

    <!-- jQuery -->
    {{ HTML::script('bower_components/jquery/jquery.min.js') }}
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    {{--<link rel="shortcut icon" href="http://laravel.com/img/favicon.png">--}}
</head>

<body>

    @include('layouts.headerUmum')

<div class="ch-container">
    <div class="row">

        {{--@include('layouts.navigation')--}}

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="{{ URL::route('home') }}">Home</a>
        </li>
        <li>
            <a href="#">{{ $title }}</a>
        </li>
    </ul>
</div>

{{--@include('layouts.notifications')--}}


@yield('content')

@yield('carian')


{{--<div class="row">--}}
    {{--<div class="box col-md-12">--}}
        {{--<div class="box-inner">--}}
            {{--<div class="box-header well">--}}
                {{--<h2><i class="glyphicon glyphicon-info-sign"></i> {{ $title }}</h2>--}}

                {{--<div class="box-icon">--}}
                    {{--<a href="#" class="btn btn-setting btn-round btn-default"><i--}}
                            {{--class="glyphicon glyphicon-cog"></i></a>--}}
                    {{--<a href="#" class="btn btn-minimize btn-round btn-default"><i--}}
                            {{--class="glyphicon glyphicon-chevron-up"></i></a>--}}
                    {{--<a href="#" class="btn btn-close btn-round btn-default"><i--}}
                            {{--class="glyphicon glyphicon-remove"></i></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="box-content row">--}}
                {{--<div class="col-lg-7 col-md-12">--}}

                    {{--@yield('content')--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="row" id="row2">--}}
    {{--<div class="box col-md-12">--}}
        {{--<div class="box-inner">--}}
            {{--<div class="box-header well" data-original-title="">--}}
                {{--<h2><i class="glyphicon glyphicon-user"></i> Hasil Carian</h2>--}}

                {{--<div class="box-icon">--}}
                    {{--<a href="#" class="btn btn-minimize btn-round btn-default"><i--}}
                            {{--class="glyphicon glyphicon-chevron-up"></i></a>--}}
                    {{--<a href="#" class="btn btn-close btn-round btn-default"><i--}}
                            {{--class="glyphicon glyphicon-remove"></i></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="box-content2">--}}

                    {{--@yield('carian')--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!--/span-->--}}

{{--</div>--}}













    </div>
</div><!--/fluid-row-->

    <hr>

    @include('layouts.footer')

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
