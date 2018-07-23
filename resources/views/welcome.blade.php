<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Global Network Center</title>
        
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                /*font-family: 'Raleway', sans-serif;*/
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .bg-menu{
                background:linear-gradient(135deg,#8f75da 0,#727cf5 60%);
            }
        </style>
    </head>
    <body>
        <div id="id="app"">
        
        <nav class="navbar navbar-expand-md fixed-top bg-menu navbar-light navbar-laravel shadow-sm p-3 mb-5"">

            <div class="container">
                <a class="navbar-brand text-white  font-weight-bold" href="{{ url('/') }}">
                    GNC
                </a>
                <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item ">
                               <h6> <a class="nav-link  text-white " href="{{ route('login') }}">{{ __('Login') }}</a></h6>
                            </li>
                            <li class="nav-item">
                               <h6> <a class="nav-link text-white " href="{{ route('register') }}">{{ __('Register') }}</a></h6>
                            </li>
                        @else
                            <li class="nav-item">
                                <h5> <a id="navbarDropdown" class="nav-link text-white" href="{{ route('home') }}">
                                   <i class="fas fa-user px-2"> </i>{{ Auth::user()->name }} 
                                </a>
                                </h5>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



            <div class="content">
<!--                 <div class="title m-b-md">
                    GNC 
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->


                <div id="demo" class="carousel slide" data-ride="carousel">

                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                  </ul>

                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src=" {{URL::asset('/img/a6.jpg')}}"  alt="Los Angeles" height="660" width="1900">
                      <div class="carousel-caption d-none d-md-block">
                            <h3>Explore the power of a real network</h3>
                            <p> Make your dream a reality</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src=" {{URL::asset('/img/a5.jpg')}}"alt="New York"  height="660" width="1900">
                       <div class="carousel-caption d-none d-md-block">
                            <h3>Explore the power of a real network</h3>
                            <p> Make your dream a reality</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src=" {{URL::asset('/img/a2.jpg')}}"alt="New York"  height="660" width="1900">
                       <div class="carousel-caption d-none d-md-block">
                            <h3>Explore the power of a real network</h3>
                            <p> Make your dream a reality</p>
                      </div>
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>

                </div>




            </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    </body>
</html>
