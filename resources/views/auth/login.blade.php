@extends('master')

@section('content')
    <h2>Login Form</h2>
<hr>

@include('errors.userError')
@endsection

@section('content2')
<table>
{!! Form::open(["url" => "/auth/login"]) !!}
<tr>
    <td>Enter Email</td>
    <td>{!! Form::email("email") !!}</td>
</tr>
<tr>
    <td>Enter Password</td>
    <td>{!! Form::password("password") !!}</td>
</tr>
<!--<div>
    {!! Form::label('time', 'Time:') !!}
    {!! Form::input('date', 'time', date('Y-m-d')) !!}
</div>-->
<tr>
    <td colspan='2' align='center'>{!! Form::submit('Login') !!}</td>
</tr>
{!! Form::close() !!}
</table>
@endsection
@stop