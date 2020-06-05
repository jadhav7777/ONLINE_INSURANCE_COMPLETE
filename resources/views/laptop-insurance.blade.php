@extends('layouts.footer')
@section('content')
@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- <link rel="stylesheet" href="css/bootstrap.min.css">  -->
	<link rel="stylesheet" href="css/style.css">


    <title>Document</title>
</head>
<body>

    <div class="bgimg3">
        <div class="container text-center text-white hearderset">
        <h2>Laptop Insurance</h2>
        <h1>Buying your Laptop insurance has never been easier!</h1>
    </div>

    <section id="team">
    	<div>
    		<center>
    		<br><br><br><br>
<section class="section-pad">
    <div class="container">
        <div class="row row-sm-flex">
            <div class="col-sm-5 hidden-xs">
                <div class="img-wrapper">
                     <img class="img-responsive img-illustrate" src="https://d2h44aw7l5xdvz.cloudfront.net/assets/img/dropped-my-mobile-1.svg" style="width: px;"/>
                </div>
            </div>

            <div class="col-sm-7">
                <div class="content-list">
                    <div class="title-wrap">
                        <h2 class="h2-v2">What’s great about Laptop Insurance ?</h2>
                    </div>
                </div>
                <div class="content-list">
                    <div>
                            <ul class="list-menu list-menu--check">
                                      <li class="list-menu__item">
                               <b>New &amp; Used Laptops</b> - Now Laptop insurance for brand new Laptops as well as old/used ones.
                            </li>

                                      <li class="list-menu__item">
                               <b>Accidental Screen damage covered</b> - Screen damages are the most common of all heartbreaks! All screen damages due to accidental or liquid damage are covered!
                            </li>

                                      <li class="list-menu__item">
                               <b>Low prices</b> - Buy this laptop insurance cover at almost the cost of a Screen Guard!
                            </li>

                                      <li class="list-menu__item">
                               <b>Worldwide cover</b> - Travel around the world worry-free. Our laptop insurance policy is valid everywhere.
                            </li>

                                      <li class="list-menu__item">
                               <b>Model No. linked cover</b> - Whether you use the laptop or your family or friend does, this laptop insurance policy will be valid for all. It is linked to the model no. of the laptop &amp; not the user.
                            </li>

                                      <li class="list-menu__item">
                               <b>Reimburse up to Sum Insured</b> - At the time of buying, we will show you an amount, called Sum Insured. Post claim approval, you can get your repair costs reimbursed up to your respective sum insured.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section></div>

<!--
  <center>

    @if(!Auth::guest())
     <form action="{{ url('/calllaptopform') }}">
    <button type="submit" class="btn btn-success">Continue</button>
    </form>
    @else
    <form action="{{ url('/login') }}">
	<button  type="submit" class="btn btn-warning">Login to continue</button>
    </form>
    @endif
  </center>
-->

  <center>
  <form action="{{ url('/callpolicy') }}">
  <button type="submit" class="btn btn-success">Check Insurance Policy For Your Laptop</button>
  </form>
  </center>


<br><br><br><br>




        <script sazsrc="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
@endsection
