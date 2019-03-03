@extends('master')
@section('content')

<h2>Welcom</h2>

{!! Form::open(['url' => 'foo/bar']) !!}
    {!!Form::label('email', 'E-Mail Address: ')!!}
    {!!Form::text('email', 'example@gmail.com')!!}<br>
    {!!Form::label('password', 'Password: ')!!}
    {!!Form::password('password', ['class' => 'awesome'])!!}


{!! Form::close() !!}

@stop