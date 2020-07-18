<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
								<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
								<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
								<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
								<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/stylish.css"/>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            
            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

		
			<div class="container team4" style="max-width:700px">							
				<div class="row">
      <!-- column  -->
      <div class="col-lg-3 mb-4">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12">
            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" alt="wrapkit" class="img-fluid rounded-circle" style="max-width:170px;padding-right:28px;justify-content:center;" />
          </div>
          <div class="col-md-12 text-center">
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0" >Michael Doe</h5>
              <h6 class="subtitle mb-3">Property Specialist</h6>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-paper-plane"></i></a></li>
               
                
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-lg-3 mb-4">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12">
            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg" alt="wrapkit" class="img-fluid rounded-circle" style="max-width:170px;padding-right:28px;" />
          </div>
          <div class="col-md-12 text-center">
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0">Michael Doe</h5>
              <h6 class="subtitle mb-3">Property Specialist</h6>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-paper-plane"></i></a></li>
                
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
     <!-- column  -->
     <div class="col-lg-3 mb-4">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12">
            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" alt="wrapkit" class="img-fluid rounded-circle" style="max-width:170px;padding-right:28px;justify-content:center;" />
          </div>
          <div class="col-md-12 text-center">
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0" >Michael Doe</h5>
              <h6 class="subtitle mb-3">Property Specialist</h6>
              <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-paper-plane"></i></a></li>
                
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-lg-3 mb-4">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12">
            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" alt="wrapkit" class="img-fluid rounded-circle" style="max-width:170px;padding-right:28px;justify-content:center;" />
          </div>
          <div class="col-md-12 text-center">
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0" >Michael Doe</h5>
              <h6 class="subtitle mb-3">Property Specialist</h6>
              <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-paper-plane"></i></a></li>
                
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-lg-3 mb-4">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12">
            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" alt="wrapkit" class="img-fluid rounded-circle" style="max-width:170px;padding-right:28px;" />
          </div>
          <div class="col-md-12 text-center">
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0" >Michael Doe</h5>
              <h6 class="subtitle mb-3">Property Specialist</h6>
              <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-paper-plane"></i></a></li>
                
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
						</div>	
						</div>
						</div>
    </div>
    </body>
</html>
