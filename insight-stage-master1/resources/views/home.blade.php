@extends('layouts.app')

@section('content')

<section id="slider" style="background-image: url('{{ asset('img/')}}'); background-size:repeat;background-repeat:no-repeat;align-items: center;">
<div class="top-content">
    <div class="container-fluid">

        <div class="title" style="padding-top:30px;">
        <div class="row">
            <div class="col-4" style="float:left;">
            <img src="{{asset('img/lines.png')}}" alt="">
            </div>
            <div class="col-4" style="text-align:center; color:black;">
            <h3>TRENDING ARTICLES</h3>
            </div>
             <div class="col-4" >
             <img src="{{asset('img/lines.png')}}" style="float:right;" alt="">
            </div>
        
        </div>
        
        
    </div>
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

<!--Begin Members-->
<section id="members" style="background-image: url('{{ asset('img/')}}'); background-size:cover;background-repeat:no-repeat;">
<div class="container team4" style="margin-right:auto;justify-content:center;margin: auto;">	
<div class="title" style="margin-bottom:10px;">
        <div class="row">
            <div class="col-4" style="float:left;">
            <img src="{{asset('img/lines.png')}}" alt="">
            </div>
            <div class="col-4" style="text-align:center; color:black;">
            <h3>TEAM</h3>
            </div>
             <div class="col-4" >
             <img src="{{asset('img/lines.png')}}" style="float:right;" alt="">
            </div>
        
        </div>						
	<div class="row" >
      <!-- column  -->
      <div class="col-lg-3 col-md-6 mb-lg-0  mb-4"style="margin:auto;" >
        <!-- Row -->
        <div class="row" style="justify-content:center;">
          <div class="col-md-12 text-center" >
            <img src="https://e0.365dm.com/f1/drivers/h_full_809.png" alt="wrapkit" class="img-fluid rounded-circle" style="max-width:200px;padding-right:28px;margin-left:25px;" />
          </div>
          <div class="col-md-12 text-center" >
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0" >Lewis Hamilton</h5>
              <h6 class="subtitle mb-3">Mercedes-AMG-Petronas</h6>
              <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Linkedin" style="line-height:12px;"><i class="icon-social-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="GitHub"><i class="icon-social-github"></i></a></li>
               
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-lg-3 col-md-6 mb-lg-0  mb-4"style="margin:auto;" >
        <!-- Row -->
        <div class="row" style="justify-content:center;">
          <div class="col-md-12 text-center" >
            <img src="https://www.f1fantasytracker.com/Images/Drivers/Bottas.png" alt="wrapkit" class="img-fluid rounded-circle" style="max-width:200px;padding-right:28px;margin-left:25px;" />
          </div>
          <div class="col-md-12 text-center" >
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0" >Valteri Bottas</h5>
              <h6 class="subtitle mb-3">Mercedes-AMG-Petronas</h6>
              <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Linkedin" style="line-height:12px;"><i class="icon-social-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="GitHub"><i class="icon-social-github"></i></a></li>
                
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
       <!-- column  -->
       <div class="col-lg-3 col-md-6 mb-lg-0  mb-4"style="margin:auto;" >
        <!-- Row -->
        <div class="row" style="justify-content:center;">
          <div class="col-md-12 text-center" >
            <img src="https://e2.365dm.com/f1/drivers/h_full_1489.png" alt="wrapkit" class="img-fluid rounded-circle" style="max-width:200px;padding-right:28px;margin-left:25px;" />
          </div>
          <div class="col-md-12 text-center" >
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0" >Charles Leclerc</h5>
              <h6 class="subtitle mb-3">Ferrari</h6>
              <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Linkedin" style="line-height:12px;"><i class="icon-social-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="GitHub"><i class="icon-social-github"></i></a></li>
               </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
       <!-- column  -->
       <div class="col-lg-3 col-md-6 mb-lg-0  mb-4"style="margin:auto;" >
        <!-- Row -->
        <div class="row" style="justify-content:center;">
          <div class="col-md-12 text-center" >
            <img src="https://e2.365dm.com/f1/drivers/h_full_1465.png" alt="wrapkit" class="img-fluid rounded-circle" style="max-width:200px;padding-right:28px;margin-left:25px;" />
          </div>
          <div class="col-md-12 text-center" >
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0" >Max Verstappen</h5>
              <h6 class="subtitle mb-3">RedBull-Aston Martin</h6>
              <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Linkedin" style="line-height:12px;"><i class="icon-social-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="GitHub"><i class="icon-social-github"></i></a></li>
               
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
       <!-- column  -->
       <div class="col-lg-3 col-md-6 mb-lg-0  mb-4"style="margin:auto;" >
        <!-- Row -->
        <div class="row" style="justify-content:center;">
          <div class="col-md-12 text-center" >
            <img src="https://e2.365dm.com/f1/drivers/h_full_1501.png" alt="wrapkit" class="img-fluid rounded-circle" style="max-width:200px;padding-right:28px;margin-left:25px;" />
          </div>
          <div class="col-md-12 text-center" >
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0" >Lando Norris</h5>
              <h6 class="subtitle mb-3">McLaren-Renault</h6>
              <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Linkedin" style="line-height:12px;"><i class="icon-social-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="GitHub"><i class="icon-social-github"></i></a></li>
               
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->

      <!-- column  -->
      <div class="col-lg-3 col-md-6 mb-lg-0  mb-4"style="margin:auto;" >
        <!-- Row -->
        <div class="row" style="justify-content:center;">
          <div class="col-md-12 text-center" >
            <img src="https://e1.365dm.com/f1/drivers/h_full_1475.png" alt="wrapkit" class="img-fluid rounded-circle" style="max-width:200px;padding-right:28px;margin-left:25px;" />
          </div>
          <div class="col-md-12 text-center" >
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0" >Carlos Sainz</h5>
              <h6 class="subtitle mb-3">McLaren-Renault</h6>
              <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Linkedin" style="line-height:12px;"><i class="icon-social-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="GitHub"><i class="icon-social-github"></i></a></li>
               
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-lg-3 col-md-6 mb-lg-0  mb-4"style="margin:auto;" >
        <!-- Row -->
        <div class="row" style="justify-content:center;">
          <div class="col-md-12 text-center" >
            <img src="https://e2.365dm.com/f1/drivers/h_full_1471.png" alt="wrapkit" class="img-fluid rounded-circle" style="max-width:200px;padding-right:28px;margin-left:25px;" />
          </div>
          <div class="col-md-12 text-center" >
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0" >Esteban Ocon</h5>
              <h6 class="subtitle mb-3">Renault</h6>
              <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Linkedin" style="line-height:12px;"><i class="icon-social-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="GitHub"><i class="icon-social-github"></i></a></li>
               </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-lg-3 col-md-6 mb-lg-0  mb-4"style="margin:auto;" >
        <!-- Row -->
        <div class="row" style="justify-content:center;">
          <div class="col-md-12 text-center" >
            <img src="https://e1.365dm.com/f1/drivers/h_full_1504.png" alt="wrapkit" class="img-fluid rounded-circle" style="max-width:200px;padding-right:28px;margin-left:25px;" />
          </div>
          <div class="col-md-12 text-center" >
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0" >Alexander Albon</h5>
              <h6 class="subtitle mb-3">RedBull-Aston Martin</h6>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Linkedin" style="line-height:12px;"><i class="icon-social-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1" title="GitHub"><i class="icon-social-github"></i></a></li>
               </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
    </div>	
    </div>

    

<section>
@endsection
