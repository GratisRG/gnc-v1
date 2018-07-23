
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Global Network Center</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous"> 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <style type="text/css">
        


    html,
    body {
      overflow-x: hidden; /* Prevent scroll on narrow devices */

    }
    body {
      padding-top: 70px;

    }


    footer {
      padding: 30px 0;
    }

    #sidebar{

        height: 100%;
    }

    .nav-item{
        border-bottom: 1px white;
    }

    /*
     * Off Canvas
     * --------------------------------------------------
     */
    @media screen and (max-width: 767px) {
      .row-offcanvas {
        position: relative;
        -webkit-transition: all .25s ease-out;
             -o-transition: all .25s ease-out;
                transition: all .25s ease-out;
      }

      .row-offcanvas-right {
        /*right: 0;*/
        left : 0;
      }

      .row-offcanvas-left {
        /*left: 0;*/
        right: 0;
      }

      .row-offcanvas-right
      .sidebar-offcanvas {
        left: -100%; /* 12 columns */
      }

      .row-offcanvas-right.active
      .sidebar-offcanvas {
        left: -50%; /* 6 columns */
      }

      .row-offcanvas-left
      .sidebar-offcanvas {
        right: -100%; /* 12 columns */
      }

      .row-offcanvas-left.active
      .sidebar-offcanvas {
        right: -50%; /* 6 columns */
      }

      .row-offcanvas-right.active {
        left: 50%; /* 6 columns */
      }

      .row-offcanvas-left.active {
        right: 50%; /* 6 columns */
      }

      .sidebar-offcanvas {
        position: absolute;
        top: 0;
        width: 50%; /* 6 columns */
      }
    }

    .nav-link{
        font-size: 1.1em;
    }
    .bg-menu{
        background:linear-gradient(135deg,#8f75da 0,#727cf5 60%);
    }
    .nav-link:hover, .dropdown-item:hover{
        background-color: Tomato;

    }


    </style>
  </head>

  <body>

<nav class="navbar navbar-expand-md  fixed-top bg-menu navbar-light navbar-laravel shadow-sm p-3 mb-5">
            <div class="container">
                <a class="navbar-brand text-white  font-weight-bold" href="{{ url('/') }}">
                    Global Network Center
                </a>
                <button class="navbar-toggler" type="button" data-toggle="offcanvas"  aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                               <h6> <a class="nav-link  text-dark " href="{{ route('login') }}">{{ __('Login') }}</a></h6>
                            </li>
                            <li class="nav-item">
                               <h6> <a class="nav-link text-dark " href="{{ route('register') }}">{{ __('Register') }}</a></h6>
                            </li>
                        @else
                            <li class="nav-item">
                                 <a id="navbarDropdown" class="nav-link text-white">
                                   <i class="fas fa-user px-2"> </i>{{ Auth::user()->name }} 
                                </a>
                                
                            </li>
                        @endguest
                    </ul>
                </div
            </div>
</nav>

    <div id="app" >

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-6 col-md-2 sidebar-offcanvas pt-1 " id="sidebar">
          <div class="list-group border-right border-light shadow p-3 mb-5 bg-white  navbar-nav">
                <li class="nav-item   border-bottom border-light">
                     <a class="nav-link text-dark pl-4" href="{{ route('dashbord') }}"> <i class="fas fa-tachometer-alt px-2"></i>Dashbord</a> </span>
                </li>
                  <li class="nav-item dropright  border-bottom border-light">
                    <a class="nav-link dropdown-toggle text-dark pl-4 " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user px-2"></i> Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" data-toggle="modal" data-target="#personaldata" >Personnal data</a>
                      <a class="dropdown-item" data-toggle="modal" data-target="#networkdata" >Network data</a>
                      <a class="dropdown-item" href="#">Bank data</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                      </form>
                    </div>
                  </li>
                <li class="nav-item dropright  border-bottom border-light">
                    <a class="nav-link dropdown-toggle text-dark pl-4 " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-grip-horizontal px-2"></i> Level
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Starter</a>
                      <a class="dropdown-item" href="#">Level 0</a>
                      <a class="dropdown-item" href="#">Level 1</a>
                      <a class="dropdown-item" href="#">Level 2</a>
                      <a class="dropdown-item" href="#">Level 3</a>
                      <a class="dropdown-item" href="#">Level 4</a>
                      <a class="dropdown-item" href="#">Level 5</a>
                      <a class="dropdown-item" href="#">Level 6</a>
                    </div>
                </li>
                

                <li class="nav-item   border-bottom border-light">
                     <a class="nav-link text-dark pl-4" href="#"> <i class="fas fa-wallet px-2"></i> Wallet </a>
                </li>
                
          </div>
        </div><!--/span-->        

        <div class="col-12 col-md-10 border-left">
            <div class="container">
                <main class="py-1 pt-0">
                     @yield('content')
                </main>
            </div><!--/span-->

        </div>
      </div><!--/row-->
    </div>


<!-- -----********************************************************************************************** -->
<!--                                  Personal Data Modal                                                -->
<!-- -----********************************************************************************************** -->

<div class="modal fade" id="personaldata" tabindex="-1" role="dialog" aria-labelledby="personaldataTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-menu">
        <h5 class="modal-title text-white" id="personaldataTitle">Personnal data</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="container-fluid">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>Name & Surname</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Pseudo</td>
                  <td></td>
                </tr>
                <tr>
                  <td >Email</td>
                  <td ></td>
                </tr>
                <tr>
                  <td >Mobile number</td>
                  <td ></td>
                </tr>
              </tbody>
            </table>
        </div>

        
      </div>
    </div>
  </div>
</div>

<!-- -----********************************************************************************************** -->
<!--                                End  Personal Data Modal                                             -->
<!-- -----********************************************************************************************** -->


<!-- -----********************************************************************************************** -->
<!--                                 Network Data Modal                                                -->
<!-- -----********************************************************************************************** -->

<div class="modal fade" id="networkdata" tabindex="-1" role="dialog" aria-labelledby="networkdataTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-menu">
        <h5 class="modal-title text-white" id="networkdataTitle">Network data</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="container-fluid">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>Sponsor Code</td>
                  <td></td>
                </tr>
                <tr>
                  <td>My code</td>
                  <td></td>
                </tr>
                <tr>
                  <td >Account created on:</td>
                  <td ></td>
                </tr>
              </tbody>
            </table>
        </div>

        
      </div>
    </div>
  </div>
</div>

<!-- -----********************************************************************************************** -->
<!--                                End  Personal Data Modal                                             -->
<!-- -----********************************************************************************************** -->




    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script type="text/javascript"> 
        $(document).ready(function () {
          $('[data-toggle="offcanvas"]').click(function () {
            $('.row-offcanvas').toggleClass('active')
          });
        });
    </script>
  </body>
</html>
