<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

   <link rel="stylesheet" type="text/css" href="css/policy_checker.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <meta charset="utf-8">
  </head>
  <body>
  <h3 style="text-align:center;">Get Best Insurance policy here</h3>
 <table align="center" cellpadding = "15">



<!-------------------PRICE------------>



<tr>
  <td>Select</td>
  <!--Calender--->
  <td>
    <select id="vehicle" name="Item">
    <option value="/callcarform">Car</option>
    <option value="/callbikeform">Bike</option>
    <option value="/callmobileform">Mobile</option>
    <option value="/calllaptopform">Laptop</option>
  </select>
  </td>
</tr>



<tr>
<td>Price</td>


     <td><input id="price" type="text" name="price" /></td>
</tr>
<!-----------Price ends----------->
<!---Calender Script--->

  <tr>
    <td>Bought in year</td>
    <!--Calender--->
    <td><input id="year" name="purchaseyear" type="text"></td>
</tr>

</table>
<h1 id="urrl"></h1>

<script>
let veh="";
  function solve()
      {
    let test= document.getElementById("year").value;
    var date_now = new Date();
    var year_now = date_now.getFullYear();
    if( test < (year_now-7) )
    {
     document.getElementById("msgg").innerHTML = "Sorry..";
     document.getElementById("first").innerHTML = "NA";
     document.getElementById("second").innerHTML = "NA";
     document.getElementById("third").innerHTML = "NA";
    }
    else{
          let x = document.getElementById("price").value ;
    let a;
    let b;
    let c;
    let d;
    a = ( (x * 1.0) / 100 ) *3 ;
    d=Math.floor(a);
    document.getElementById("first").innerHTML = d;
    b = ( (a*2) - (x*1.0)/100);
    d=Math.floor(b);
    document.getElementById("second").innerHTML = d;
    c = ( (a*3) - ((x*1.0)/100)*2);
    d=Math.floor(c);
    document.getElementById("third").innerHTML = d;
    veh = document.getElementById("vehicle").value;
    if(veh=="/callcarform"){
      document.getElementById("type").innerHTML = "Car";
      document.getElementById("search-theme-formone").action = "{{ url('/callcarform') }}";
      document.getElementById("search-theme-formtwo").action = "{{ url('/callcarform') }}";
      document.getElementById("search-theme-formthree").action = "{{ url('/callcarform') }}";
    }
    if(veh=="/callbikeform"){
      document.getElementById("type").innerHTML = "Bike";
      document.getElementById("search-theme-formone").action =  "{{ url('/callbikeform') }}";
      document.getElementById("search-theme-formtwo").action =  "{{ url('/callbikeform') }}";
      document.getElementById("search-theme-formthree").action = "{{ url('/callcarform') }}";
    }
    if(veh=="/callmobileform"){
      document.getElementById("type").innerHTML = "Mobile";
      document.getElementById("search-theme-formone").action =  "{{ url('/callmobileform') }}";
      document.getElementById("search-theme-formtwo").action =  "{{ url('/callmobileform') }}";
      document.getElementById("search-theme-formthree").action =  "{{ url('/callmobileform') }}";
    }
    if(veh=="/calllaptopform"){
      document.getElementById("type").innerHTML = "Laptop";
      document.getElementById("search-theme-formone").action = "{{ url('/calllaptopform') }}";
      document.getElementById("search-theme-formtwo").action = "{{ url('/calllaptopform') }}";
      document.getElementById("search-theme-formthree").action = "{{ url('/calllaptopform') }}";
    }

}

 }

      function reset()
      {
    document.getElementById("price").innerHTML = "" ;
          document.getElementById("year").innerHTML= "" ;
      }



</script>



<center><div class="pricing-table-signup-medium">

  <button type="button" class="btn btn-primary" onclick="solve()" >Check</button>
  <button type="button" class="btn btn-danger" onclick="reset()" >Reset</button>
                </div>
                <center>

<h3  id="msgg" > Best policy options for:</h3>

<h2 id="type" > </h2>

<div class="container-fluid">
  <div class="row-fluid">

          <h4><a href="#"></a></h4>

  </div>
  <div class="row-fluid">

    <div class="lm">
              <div class="span3 tiny ">
                  <div class="pricing-table-header-tiny">

                    <h3>1 Year insurance price including GST.</h3>
                  <center>   <h2 id="first" ></h2></center>
                  </div>
                  <div class="pricing-table-features">
                      <p><strong>Free Greasing</strong></p>
                      <p><strong>Any Time Claim</strong></p>
                      <p><strong>Free 1 ltr Mobil</strong></p>
                      <p><strong>Stree-free for 1 years in one go</strong></p>

                  </div>
                  <div class="pricing-table-signup-tiny">
                    @if(!Auth::guest())


                    <form action="/" id="search-theme-formone" >
                   <button type="submit" class="btn btn-success">Buy Now</button>
                   </form>

                    @else
                    <form action="{{ url('/login') }}">
                    <button  type="submit" class="btn btn-warning">Login to continue</button>
                    </form>
                    @endif
                  </div>
              </div> </div>
   <div class="span3 small">
                  <div class="pricing-table-header-small">
                    <h3>2 Years insurance price including GST.</h3>
                  <center> <h2 id="second" ></h2></center>
                  </div><div class="pricing-table-features">
                      <p><strong>Free Greasing</strong></p>
                      <p><strong>Any Time Claim</strong></p>
                      <p><strong>Free 1 ltr Mobil</strong></p>
                        <p><strong>Stree-free for 2 years in one go</strong></p>

                  </div>
                  <div class="pricing-table-signup-small">
                    @if(!Auth::guest())
                    <form action="/" id="search-theme-formtwo"  >
                   <button type="submit" class="btn btn-success">Buy Now</button>
                   </form>
                    @else
                    <form action="{{ url('/login') }}">
                    <button  type="submit" class="btn btn-warning">Login to continue</button>
                    </form>
                    @endif
                  </div>
              </div>


              <div class="span3 medium">
                  <div class="pricing-table-header-medium">
                    <h3>3 Years insurance price including GST.</h3>
                   <center> <h2 id="third" ></h2></center>
                  </div><div class="pricing-table-features">
                    <p><strong>Free Greasing</strong></p>
                    <p><strong>Any Time Claim</strong></p>
                    <p><strong>Free 2 ltr Mobil</strong></p>
                      <p><strong>Stree-free for 3 years in one go</strong></p>



                  </div>
                  <div class="pricing-table-signup-medium">
                    @if(!Auth::guest())
                    <form action="/" id="search-theme-formthree"  >
                   <button type="submit" class="btn btn-success">Buy Now</button>
                   </form>
                    @else
                    <form action="{{ url('/login') }}">
                    <button  type="submit" class="btn btn-warning">Login to continue</button>
                    </form>
                    @endif

                  </div>
              </div>


           </div>

  </div>
  <!------------------------------------------------------------------------------------------------------->
      <!--bootstrap linking--->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js"></script>
  <!----bootstrap linking ends--->
    </body>
  </html>
