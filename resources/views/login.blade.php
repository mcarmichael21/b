@extends('temp')

@section('title')
    Login
@stop

@section('content')
    {!! Form::open(array('url' => 'foo/bar')) !!}
        {!! Form::text('email', 'example@gmail.com') !!}
        {!! Form::password('password') !!}
        {!! Form::submit('Log In') !!}
        <br><br>
        <a href="#">Forgot Password?</a>
        <br><br>
        <a href="#">Don't have an account? Sign Up</a>
    {!! Form::close() !!}
@stop