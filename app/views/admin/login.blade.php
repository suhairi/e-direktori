@extends('layouts.login')

@section('content')


{{--{{ Hash::make('adminhq') }}--}}

<form class="form-horizontal" action="{{ URL::route('login-post') }}" method="post">
    <fieldset>
        <div class="input-group input-group-lg">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
            <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="clearfix"></div><br>

        <div class="input-group input-group-lg">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>

        <p class="center col-md-5">
            <button type="submit" class="btn btn-primary">Login</button>
        </p>
    </fieldset>
    {{ Form::token() }}
</form>

@stop