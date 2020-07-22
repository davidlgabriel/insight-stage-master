@extends('layouts.app')

@section('content')

<table border="1">
    <tr>
    <th>Name</th>
    <th>email</th>
    <th>massage</th>
    <th>file</th>
    </tr>
    @foreach($file as $key=>$data)
    @if($data->verif == '1')
    <tr>
        <td>{{$data->verif}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->message}}</td>
        <td><a href="/article/all/{{$data->id}}">View</a></td>
        <td><a href="/article/download/{{$data->file}}">Download</a></td>
    </tr>
    @endif
    @endforeach
</table>

@endsection