@extends('master')

@section('content')
<table>
    <tr style='padding-right: 10px;'>
        <th class='padding'>Image</th>
        <th class="padding">Id</th>
        <th class="padding">Name</th>
        <th class="padding">Email</th>
        
        <th>Operations</th>
    </tr>
    @foreach ($data as $value) 
        <tr>
            <td><img src='/images/{{ $value->image }}' style='height: 50px; width: 80px;' /></td>
            <td class="padding">{{ $value->id }}</td>
            <td class="padding">{{ $value->name }}</td>
            <td class="padding">{{ $value->email }}</td>
            
            <td><a href='user/add/{{ $value->id }}'>Edit</a>
            @if ($userId == 1) 
                / <a href='user/delete/{{ $value->id }}'>Delete</a></td> 
            @endif
        </tr>
    @endforeach
</table>

<button type="button" onclick="window.location='{{ url("user/add") }}'">Add User</button>
@stop