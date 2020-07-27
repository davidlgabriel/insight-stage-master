@extends('layouts.app')

@section('content')

<section id="slider" style="background-image: url('{{ asset('img/')}}'); background-size:repeat;background-repeat:no-repeat;align-items: center;">
<div class="top-content">
    <div class="container-fluid">
        <div>
        <div id="image">
            <img src="{{ asset('img/IS23.png')}}" style="align-items: center;" alt="">
        </div>
        </div>

        <h1 class="slider-title">TRENDING POSTS</h1>
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active" >
                    <div class="card mb-2">
                        <img class="card-img-top" src="{{ asset('img/23.jpeg') }}" alt="Card image cap">
                            <div class="card-body">
                                <a class="card-title font-weight-bold" style="text-align= center;" href=""><h5 class="card-title font-weight-bold">Ciência de dados: Ferramentas para o combate à Covid-19</h5></a>
                            </div>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-2">
                        <img class="card-img-top" src="{{ asset('img/23.jpeg') }}" alt="Card image cap">
                            <div class="card-body">
                            <a class="card-title font-weight-bold" href=""><h5 class="card-title font-weight-bold">Ciência de dados: Ferramentas para o combate à Covid-19</h5></a>                          
                            </div>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-2">
                        <img class="card-img-top" src="{{ asset('img/23.jpeg') }}" alt="Card image cap">
                            <div class="card-body">
                                <a class="card-title font-weight-bold" href=""><h5 class="card-title font-weight-bold">Ciência de dados: Ferramentas para o combate à Covid-19</h5></a>                                
                            </div>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-2">
                        <img class="card-img-top" src="{{ asset('img/23.jpeg') }}" alt="Card image cap">
                            <div class="card-body">
                                <a class="card-title font-weight-bold" href=""><h5 class="card-title font-weight-bold">Card title</h5></a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-2">
                        <img class="card-img-top" src="{{ asset('img/23.jpeg') }}" alt="Card image cap">
                            <div class="card-body">
                                <a class="card-title font-weight-bold" href=""><h5 class="card-title font-weight-bold">Card title</h5></a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-2">
                        <img class="card-img-top" src="{{ asset('img/23.jpeg') }}" alt="Card image cap">
                            <div class="card-body">
                                <a class="card-title font-weight-bold" href=""><h5 class="card-title font-weight-bold">Card title</h5></a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-2">
                        <img class="card-img-top" src="{{ asset('img/23.jpeg') }}" alt="Card image cap">
                            <div class="card-body">
                                <a class="card-title font-weight-bold" href=""><h5 class="card-title font-weight-bold">Card title</h5></a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-2">
                        <img class="card-img-top" src="{{ asset('img/23.jpeg') }}" alt="Card image cap">
                            <div class="card-body">
                                <a class="card-title font-weight-bold" href=""><h5 class="card-title font-weight-bold">Card title</h5></a>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" style="color=black;" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>        
    </div>
</div>
<div class="vertical-center" style="text-align: center;">
  <button class="button button4 font-weight-bold">Ver Mais</button>
</div>

</section>
@endsection
