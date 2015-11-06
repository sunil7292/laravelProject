@extends('master')

@section('content')
    <h2>Register Form</h2>
<hr>

@include('errors.userError')
@endsection

@section('content2')
<table>
{!! Form::open(["url" => "/auth/register", 'files' => true]) !!}
<tr>
    <td>Enter Your Name</td>
    <td>{!! Form::text("name") !!}</td>
</tr>
<tr>
    <td>Enter Your Email</td>
    <td>{!! Form::email("email") !!}</td>
</tr>
<tr>
    <td>Enter Your Password</td>
    <td>{!! Form::password("password") !!}</td>
</tr>
<tr>
    <td>Enter Your Confirm Password</td>
    <td>{!! Form::password("password_confirmation") !!}</td>
</tr>
<tr>
    <td>{!! Form::label('profile', 'Profile') !!}</td>
    <td>{!! Form::file('photo', null) !!}</td>
</tr>
<tr>
    <td>Enter Role</td>
    <td>{!! Form::select('role', array('' => '--Select--', '1' => 'Admin', '2' => 'Teacher')); !!}</td>
</tr>
<!--<div>
    {!! Form::label('time', 'Time:') !!}
    {!! Form::input('date', 'time', date('Y-m-d')) !!}
</div>-->
<tr>
    <td colspan='2' align='center'>{!! Form::submit('Register') !!}</td>
</tr>
{!! Form::close() !!}
</table>
@endsection
@stop