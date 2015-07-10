@extends('temp')

@section('title')
    Start Using Bargo Today!
@stop

@section('content')
    {!! Form::open(array('url' => 'foo/bar')) !!}<br><br>
    {!! Form::text('barName', '', ['placeholder'=>'Bar Name']) !!}<br><br>
    {!! Form::text('address', '', ['placeholder'=>'Address']) !!}<br><br>
    {!! Form::text('city', '', ['placeholder'=>'City']) !!}<br><br>
    {!! Form::text('state', '', ['placeholder'=>'State']) !!}<br><br>
    {!! Form::text('email', '', ['placeholder'=>'example@gmail.com']) !!}<br><br>
    {!! Form::password('password', '', ['placeholder'=>'Password']) !!}<br><br>
    {!! Form::submit('Sign Up') !!}
    <br><br>
    <a href="#">Forgot Password?</a>
    <br><br>
    <a href="#">Already have an account? Login</a>
    {!! Form::close() !!}
@stop