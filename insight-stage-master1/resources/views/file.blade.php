@extends('layouts.app')

@section('content')
<h3>{{$data->title}}</h3>
<img src="{{asset('img/'.$data->image)}}" style="width:400px;height:200px;" alt="">
<p>{{$data->descricao}}</p>
<p>{{$data->introdution}}</p>
<p>{{$data->Desenvolvimento}}</p>
<p>{{$data->Conclusão}}</p>
<!--<p>
<iframe src="{{url('storage/'.$data->file)}}" style="width:1000px;height:600px;"></iframe>
</p>-->
@endsection