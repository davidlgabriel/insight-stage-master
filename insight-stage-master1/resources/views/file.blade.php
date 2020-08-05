@extends('layouts.app')

@section('content')
<h3>{{$data->name}}</h3>
<h3>{{$data->email}}</h3>
<h3>{{$data->message}}</h3>
<p>
<iframe src="{{url('storage/'.$data->file)}}" style="width:1000px;height:600px;"></iframe>
</p>

@endsection