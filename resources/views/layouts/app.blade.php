
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/1/all.css">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
<link rel="stylesheet" type="text/css" href="css/drop-downcss.css">
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fab fa-drupal" style="font-size: 25px; color: crimson"></i>    ONLINE INSURANCE
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{url('/')}}">Home</a></li>
                </ul>




                 <div class="dropdown">
                   <button class="dropbtn">Policies</button>
                  <div class="dropdown-content">

                 <a href="{{ url('/callcar') }}"><img src="image/car-side-view.svg" height="20px" width="40px"/>Car Insurance</a>
                 <a href="{{ url('/callbike') }}"><img src="image/motorcycle-side-view.svg" height="20px" width="40px"/>Bike Insurance</a>
                <a href="{{ url('/callmobile') }}"><img src="image/mobile-screen-glare.svg" height="20px" width="40px"/>Mobile Insurance</a>
                <a href="{{ url('/calllaptop') }}"><img src="image/laptopNew.png" height="20px" width="40px"/>Laptop Insurance</a>

              </div>
               </div>


               <ul class="nav navbar-nav">
                 <li><a href="{{ url('/renewal') }}">Renewal</a></li>
                 </ul>











                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::user())
                    <li><a href="{{ url('/claim') }}">Claim</a></li>
                    <li><a href="{{ url('/aboutus') }}">About us</a></li>
                        <li><a href="{{ url('/contactus') }}">Contact us</a></li>

                        @endif




                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        <li><a href="{{ url('/aboutus') }}">About us</a></li>
                        <li><a href="{{ url('/contactus') }}">Contact us</a></li>
                    @else


                        <?php

                          $curr  = auth()->user();
                          if($curr->usertype == "admin")
                          {
                            ?>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-sign-out"></i>Profile</a></li>
                                    <li><a href="{{ url('/policy') }}"><i class="fa fa-btn fa-sign-out"></i>Policy</a></li>
                                      <li><a href="{{ url('/dashboard') }}"><i class="fa fa-btn fa-sign-out"></i>Dashboard</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>



                        <?php
                      }else if($curr->usertype == "subadmin")
                        {
                        ?>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/subdashboard') }}"><i class="fa fa-btn fa-sign-out"></i>Dashboard</a></li>
                              <li><a href="{{ url('/home') }}"><i class="fa fa-btn fa-sign-out"></i>Profile</a></li>
                              <li><a href="{{ url('/policy') }}"><i class="fa fa-btn fa-sign-out"></i>Policy</a></li>

                              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>

                        <?php
}
                        else {

                         ?>



                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/home') }}"><i class="fa fa-btn fa-sign-out"></i>Profile</a></li>
                                <li><a href="{{ url('/policy') }}"><i class="fa fa-btn fa-sign-out"></i>Policy</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>


                        <?php
                      }



                         ?>




                    @endif





                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
