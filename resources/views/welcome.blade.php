<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/mainStyl.css">
  <link rel="stylesheet" type="text/css" href="css/1/all.css">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800&display=swap" rel="stylesheet">
</head>
<body>

      <div class="container">
        <nav style="position: fixed;z-index: 2">
            <h1 class="insurance"><i class="fab fa-drupal" style="font-size: 50px; color: crimson"></i> <a href="{{url('/')}}">Ins<span>ura</span>nce</a></h1>

            <ul style="margin-left: 300px;">
                <li><a href="{{url('/')}}">Home</a></li>
            <div class="dropdown">
  <button class="dropbtn" style="margin-top: -15px">PRODUCT</button>
  <div class="dropdown-content">
    <a href="{{ url('/callcar') }}"><i class="fas fa-car" style="font-size: 30px;color: crimson"></i>Car Insurance</a>
    <a href="{{ url('/callbike') }}"><i class="fas fa-motorcycle" style="font-size: 30px;color: crimson"></i>Bike Insurance</a>

    <a href="{{ url('/callmobile') }}"><i class="fas fa-mobile-alt" style="font-size: 30px;color: crimson"></i>Mobile Insurance</a>
    <a href="{{ url('/calllaptop') }}"><i class="fas fa-laptop" style="font-size: 30px;color: crimson"></i>Laptop Insurance</a>

  </div>
</div>

<li><a href="{{ url('/renewal') }}">Renewal</a></li>
@if (Auth::user())
  <li><a href="{{ url('/claim') }}">Claim</a></li>

@endif

                <li><a href="{{ url('/contactus') }}">Contact Us</a></li>
                <li><a href="{{ url('/aboutus') }}">About Us</a></li>
            </ul>

        </nav>
      </div>



    <header >
        <video autoplay muted loop id="videolayout" >
            <source src="image/insurance.mp4" type="video/mp4">
        </video>
    </header>
<div class="overlay"></div>
<section>
    <div class="cityText">
        <h1>Welcome To Online Insurance</h1>
        <br>
        <P>Protect Your Tomorrows.... Today</P>

    <br><br><br>
    @if (Auth::guest())
    <form action="{{ url('/login') }}">
    <button type="submit" class="btn btn-success">LOGIN</button>
    </form>

    <br><br>

    <form action="{{ url('/register') }}">
    <button type="submit" class="btn btn-success">SINGUP</button>
    </form>
    @endif


    </div>
</section>

</body>
<body>
</body>
</html>
