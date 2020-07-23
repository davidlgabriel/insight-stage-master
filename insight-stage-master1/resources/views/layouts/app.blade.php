<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IS</title>

    <!-- Icons -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

    <!-- Scripts 
    <script src="{{ asset('js/app.js') }}" defer></script>-->
    
    <script defer src="https://friconix.com/cdn/friconix.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
					
    <!-- Fonts -->
   
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:400,800&display=swap&subset=latin-ext" rel="stylesheet">

     Styles -->
    <!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link rel="shortcut icon" href="{{ asset('img/IS.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hamburgers.css') }}" rel="stylesheet">
    <link href="{{ asset('css/members.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
</head>
<body>
<div id="app">
    <nav class="navbar bg-light navbar-light navbar-expand-lg">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('img/IS.png') }}" alt="Logo" title="Logo"> </a>
            <button class="navbar-toggler hamburger hamburger--collapse" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="hamburger-box"><span class="hamburger-inner"></span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Articles</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Send us your work</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Teams</a></li>
                    
                </ul>

            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row text-light text-center py-4 justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-6">
                    <p>Copyright &copy; 2020 Insight Stage - All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    <script src="https://kit.fontawesome.com/a6273b012e.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    
    <script>
        if ($('#app').height() < $(window).height()) {
            $('footer').addClass('fixed-bottom');
        } else {
            $('footer').removeClass('fixed-bottom');
        }
        $(window).resize(function() {
            if ($('#app').height() < $(window).height()) {
                $('footer').addClass('fixed-bottom');
            } else {
                $('footer').removeClass('fixed-bottom');
            }
        });
    </script>
    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function() {
            hamburger.classList.toggle("is-active");
        })
          /**
     * https://www.youtube.com/watch?v=R_-oGJBg3nw
     * Cookies fazer;
     */
    </script>
    
  


</body>

</html>