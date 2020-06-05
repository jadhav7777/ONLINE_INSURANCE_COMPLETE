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

    <div class="bgimg">
        <div class="container text-center text-white hearderset">
        <h2>Two Wheeler Insurance</h2>
        <h1>Buying your bike insurance has never been easier!</h1>
    </div>

    <section id="team">
    	<div>
    		<center>
    		<br><br><br><br>
<br><br>

    		<h1>What's Covered in Two Wheeler Insurance</h1>
    		<br><br>
    		</center>
    	</div>

    	<div class="row">
    		<div class="col-lg-3 col-ms-6">
    			<div class="card">
    				<div class="card-body">
    					<center>
    				<img src="image/Bike-insurance-damaged.svg" width="150" height="150">
    				<h3>Accidents</h3>
    				<div class ="d-flex flex-row justify-content-center">
    					    <div class="p-4">
								<p>Damages and losses that may arise due to an accident or collision</p>
								<br>
    					    </div>
    					</div>
    				</center>
    				</div>
    			</div>
    		</div>

    		<div class="col-lg-3 col-ms-6">
    			<div class="card">
    				<div class="card-body">
    					<center>
    				<img src="image/Bike-insurance-theft.svg" width="150" height="150">
    				<h3>Theft</h3>
    				<div class ="d-flex flex-row justify-content-center">
    					    <div class="p-4">
								<p>Covers for your losses in case your two-wheeler is unfortunately stolen!</p>
								<br>
    					    </div>
    					</div>
    				</center>
    				</div>
    			</div>
    		</div>

    		<div class="col-lg-3 col-ms-6">
    			<div class="card">
    				<div class="card-body">
    					<center>
    				<img src="image/Bike-insurance-fire.svg" width="150" height="150">
    				<h3>Fire</h3>
    				<div class ="d-flex flex-row justify-content-center">
    					    <div class="p-4">
								<p>Damages and losses to your two-wheeler in case of an accidental fire</p>
								<br>
							</div>

    					</div>
    				</center>
    				</div>
    			</div>
    		</div>

    		<div class="col-lg-3 col-ms-6">
    			<div class="card">
    				<div class="card-body">
    					<center>
    				<img src="image/Bike-insurance-disaster.svg" width="150" height="150">
    				<h3>Natural Disasters</h3>
    				<div class ="d-flex flex-row justify-content-center">
    					    <div class="p-4">
    						    <p>Damages caused to your two-wheeler due to nature’s many furies, such as due to floods, cyclones, etc.</p>
    					    </div>
    					</div>
    				</center>
    				</div>
    			</div>
    		</div>
</div>

<br><br><br>
    	<div>
    		<center>
    		<br><br><br>

    		<h1>What's not Covered in Two-Wheeler Insurance</h1>
    		<br><br>
    		</center>
    	</div>

    	<div class="row">
    		<div class="col-lg-3 col-ms-6">
    			<div class="card">
    				<div class="card-body">
    					<center>
    				<h3>Contributory Negligences</h3>
    				<div class ="d-flex flex-row justify-content-center">
    					    <div class="p-4">
    						    <p>Any contributory negligence(e.g. damage due to driving a two-wheeler in a flood, which is not recommended as per the manufacturer’s driving manual, will not be covered)</p>
    						    <br><br>
    					    </div>
    					</div>
    				</center>
    				</div>
    			</div>
    		</div>

    		<div class="col-lg-3 col-ms-6">
    			<div class="card">
    				<div class="card-body">
    					<center>
    				<h3>Drunk Driving or without a Licence</h3>
    				<div class ="d-flex flex-row justify-content-center">
    					    <div class="p-4">
    						    <p>Your bike insurance won’t cover for you in situations where you were riding drunk or without a valid two-wheeler licence.</p>
    						    <br><br><br><br>
    					    </div>
    					</div>
    				</center>
    				</div>
    			</div>
    		</div>

    		<div class="col-lg-3 col-ms-6">
    			<div class="card">
    				<div class="card-body">
    					<center>
    				<h3>Add-ons not Bought</h3>
    				<div class ="d-flex flex-row justify-content-center">
    					    <div class="p-4">
    						    <p>Some situations are covered in add-ons. If you haven’t bought those add-ons, the corresponding situations will not be covered.</p>
    						    <br><br><br><br>
    					    </div>
    					</div>
    				</center>
    				</div>
    			</div>
    		</div>

    		<div class="col-lg-3 col-ms-6">
    			<div class="card">
    				<div class="card-body">
    					<center>
    				<h3>Consequential Damages</h3>
    				<div class ="d-flex flex-row justify-content-center">
    					    <div class="p-4">
    						    <p>Any damage which is not a direct result of the accident (e.g. after an accident, if the damaged two-wheeler is being used incorrectly and the engine gets damaged, it is considered as consequential damage and it will not be covered)</p>
    					    </div>
						</div>

    				</center>
    				</div>
    			</div>
			</div>

</div>


</section>
<br><br>

<!--
  <center>

    @if(!Auth::guest())
     <form action="{{ url('/callbikeform') }}">
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
<button type="submit" class="btn btn-success">Check Insurance Policy For Your Bike</button>
</form>
</center>

<br><br><br><br>




        <script sazsrc="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
@endsection
