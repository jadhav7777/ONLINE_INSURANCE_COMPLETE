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
   <!-- <link rel="stylesheet" href="css/bootstrap.min.css">   -->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <div class="bgimg1">
        <div class="container text-center text-white hearderset">
        <h2>Car Insurance</h2>
        <h1>Getting car insurance online made simpler!</h1>
    </div>

    <section id="team">
    	<div>
    		<center>
    		<br><br><br><br>
<br><br>

    		<h1>What's Covered in Car our Insurance</h1>
    		<br><br>
    		</center>
    	</div>

    	<div class="row">
    		<div class="col-lg-3 col-ms-6">
    			<div class="card">
    				<div class="card-body">
    					<center>
    				<img src="image/car-accident.svg" width="150" height="150">
    				<h3>Accidents</h3>
    				<div class ="d-flex flex-row justify-content-center">
    					    <div class="p-4">
								<p>Damages and losses that may arise out of accidents and collisions</p>
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
    				<img src="image/car-theft.svg" width="150" height="150">
    				<h3>Theft</h3>
    				<div class ="d-flex flex-row justify-content-center">
    					    <div class="p-4">
								<p>Covers for the losses incurred when your car is unfortunately stolen</p>
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
    				<img src="image/car-fire.svg" width="150" height="150">
    				<h3>Fire</h3>
    				<div class ="d-flex flex-row justify-content-center">
    					    <div class="p-4">
								<p>Damages and losses caused to your car due to any kind of accidental fire</p>
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
    				<img src="image/car-natural.svg" width="150" height="150">
    				<h3>Natural Disasters</h3>
    				<div class ="d-flex flex-row justify-content-center">
    					    <div class="p-4">
    						    <p>Damages and losses to your car in case of natural calamities such as floods,cyclones,etc.</p>
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
    		<br><br><br><br>
<br><br>

    		<h1>What's not Covered in Car our Insurance</h1>
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
    						    <p>Any contributory negligence(e.g. damage due to driving a car in a flood, which is not recommended as per the manufacturer’s driving manual, will not be covered)</p>

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
    						    <p>You were driving drunk or without a valid driving licence.</p>
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
    				<h3>Consequential Damages</h3>
    				<div class ="d-flex flex-row justify-content-center">
    					    <div class="p-4">
    						    <p>Any damage which is not a direct result of the accident (e.g. after an accident, if the damaged car is driven incorrectly and the engine gets damaged, it will not be covered)</p>
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
     <form action="{{ url('/callcarform') }}">
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
<form action="{{ url('/callpolicy') }}"   >
<button type="submit" class="btn btn-success">Check Insurance Policy For Your Car</button>
</form>
</center>

<br><br><br><br>





        <script sazsrc="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>



</body>
</html>
@endsection
