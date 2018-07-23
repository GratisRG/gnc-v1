<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Global Network Center</title>

        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    
    <style type="text/css">

            html,
            body {
              overflow-x: hidden; /* Prevent scroll on narrow devices */
              background: #F3F7F6;
            }
        
        .top_pad{
            /*padding-top: 5em;*/
        }
        .start_top_pad{
            padding-top: 3em;
        }


        .bg_img{
            background-image: url('{{URL::asset('/img/bg2.jpg')}}');
            padding-top: 2em;
        }
        .bg-menu{
                background:linear-gradient(135deg,#8f75da 0,#727cf5 60%);
            }

    </style>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md  fixed-top bg-menu navbar-light navbar-laravel shadow-sm p-3 mb-5">
            <div class="container">
                <a class="navbar-brand text-white font-weight-bold" href="{{ url('/') }}">
                    Global Network Center
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                                 <a id="navbarDropdown" class="nav-link text-white">
                                   <i class="fas fa-user px-2"></i> {{ Auth::user()->name }} 
                                </a>
                                
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="top_pad">
            <main class="py-4 pt-5">
                @yield('content')
            </main>

        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>
