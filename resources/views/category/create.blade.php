@extends('master')

@section('content')

@if (isset($user))
    <h2>Edit User</h2>
@else
    <h2>Add User</h2>
@endif

<hr>

@include('errors.userError')
@endsection

@section('content2')
<table>
{!! Form::open(['action' => ['imageController@store'], 'files' => true]) !!}
<tr>
    <td>{!! Form::label('name', 'Name') !!}</td>
    <td>{!! Form::text('name') !!}</td>
</tr>
<tr>
    <td>{!! Form::label('email', 'Email') !!}</td>
    <td>{!! Form::text('email') !!}</td>
</tr>
@if (isset($user))
<tr style="display:none;">
    <td>{!! Form::label('password', 'Password') !!}</td>
    <td>{!! Form::text('password') !!}</td>
</tr>
@else   
<tr>
    <td>{!! Form::label('password', 'Password') !!}</td>
    <td>{!! Form::password('password') !!}</td>
</tr>
@endif 
<tr>
    <td>{!! Form::label('profile', 'Profile') !!}</td>
    <td>{!! Form::file('photo', null) !!}</td>
</tr>
<tr>
    <td>{!! Form::label('role', 'Role') !!}</td>
    <td>{!! Form::select('role', array('' => '--Select--', '1' => 'admin', '2' => 'teacher')); !!}</td>
</tr>

<!--<div>
    {!! Form::label('time', 'Time:') !!}
    {!! Form::input('date', 'time', date('Y-m-d')) !!}
</div>-->
<tr>
    <td colspan='2' align='center'>@if (isset($user)) {!! Form::submit('Edit') !!} @else {!! Form::submit('Add') !!} @endif</td>
</tr>
{!! Form::close() !!}
</table>
@endsection
@stop