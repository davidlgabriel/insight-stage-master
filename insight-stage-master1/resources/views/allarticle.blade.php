@extends('layouts.app')

@section('title', 'All articles')

@section('content')

<style>
  .badge{
    position: absolute;
    right:10px;
    top:10px;
    background-color:#E1A042;
    text-align: center;
    border-radius: 30px 30px 30px 30px;
    color:black;
    padding:5px 10px;
    font-size:15px;
    font-family:"Open Sans";
}

.nopadding {
   padding: 0 !important;
   margin: 0 !important;
}
.topp{
    margin-top:60px
}
.card{
    margin-left:40px
}

</style>
        <div class="row justify-content-center" style="padding-top: 20px;padding-bottom: 20px">
            @foreach($flipbooks as $fb)

                <div class="row" style="text-align:center; padding-top: 20px">

                    <a href="{{ route('flipbook.show',$fb->id) }}" style="float: left;clear: both;color: #ba8b00;">

                        <h4>{{ $fb->name }}</h4>

                        <img class=" img-thumbnail" style="max-width: 30%; height: auto"
                             src="{{ asset(explode(",",$fb->content)[0])  }}" data-holder-rendered="true">

                    </a>


                </div>
            @endforeach


    @foreach($file as $key=>$data)
    @if($data->verif == '1')

    <div class col-3 m>


    <div class="card" style="width:280px">
                    <a href="#">
			                <span class="badge badge-warning">{{$data->theme}}</span>
      		            <img class="card-img-top" src="{{asset('img/'.$data->image)}}" alt="Card image cap">
		                </a>
                            <div class="card-body">
                                <a class="card-title font-weight-bold" style="text-align= center;margin:none;" href="/article/all/{{$data->id}}"><h5 class="card-title font-weight-bold">{{$data->title}}</h5></a>
                                <div class="row" >
                                  <div class="col-7 nopadding" style="padding:none">
                                    <span class="mdi mdi-account"></span>
                                    <span id="autor">{{$data->name}}</span>
                                  </div>
                                  <div class="col-5 nopadding">
                                     <span class="mdi mdi-calendar-month"></span>
                                      <span id="date" >12|08|20</span>
                                </div>
                            </div>

                            </div>
                            </div>
    </div>

    @endif
    @endforeach
    </div>


@endsection
