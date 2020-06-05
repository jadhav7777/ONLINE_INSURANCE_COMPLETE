@extends('layouts.footer')
@section('content')
@extends('layouts.app')

@section('content')

<html>
<head>
<title>Laptop Registration Form</title>
<link rel="stylesheet" type="text/css" href="css/laptop_form.css">
</head>

<script>

function solve()
    {

  let test= document.getElementById("year").value;
  var date_now = new Date();
  var year_now = date_now.getFullYear();
  if( test < (year_now-7) )
  {

  }
  else{
        let x = document.getElementById("price").value ;
  let a = ( (x * 1.0) / 100 ) *3 ;
  let b;
  let c;
  let d;

  let plan =  document.getElementById("plan").value;
  if( plan == "One" ){
    d=Math.floor(a);
      document.getElementById("amounttobepaid").value = d ;
  }
  else if( plan == "Two" ){
    b = ( (a*2) - (x*1.0)/100);
    d=Math.floor(b);
      document.getElementById("amounttobepaid").value = d ;
  }
  else if( plan == "Three" ){
    c = ( (a*3) - ((x*1.0)/100)*2);
    d=Math.floor(c);
      document.getElementById("amounttobepaid").value = d ;
  }

}

let xx=document.getElementById("price").value ;
let aa;
let bb;
let dd;

if( test > (year_now-1) ){
  aa = ( (xx * 1.0) / 100 ) * 10 ;
  bb = ( (xx*1.0) - aa );
  dd=Math.floor(bb);
    document.getElementById("amountidv").value = dd ;
}
else if( test > (year_now-2) ){
  aa = ( (xx * 1.0) / 100 ) * 20 ;
  bb = ( (xx*1.0) - aa );
  dd=Math.floor(bb);
    document.getElementById("amountidv").value = dd ;
}
else if( test > (year_now-3) ){
  aa = ( (xx * 1.0) / 100 ) * 30 ;
  bb = ( (xx*1.0) - aa );
  dd=Math.floor(bb);
    document.getElementById("amountidv").value = dd ;
}
else if( test > (year_now-4) ){
  aa = ( (xx * 1.0) / 100 ) * 40 ;
  bb = ( (xx*1.0) - aa );
  dd=Math.floor(bb);
    document.getElementById("amountidv").value = dd ;
}
else if( test > (year_now-5) ){
  aa = ( (xx * 1.0) / 100 ) * 50 ;
  bb = ( (xx*1.0) - aa );
  dd=Math.floor(bb);
    document.getElementById("amountidv").value = dd ;
}
else if(test < (year_now-7)){
  aa = ( (xx * 1.0) / 100 ) * 70 ;
  bb = ( (xx*1.0) - aa );
  dd=Math.floor(bb);
    document.getElementById("amountidv").value = dd ;
}





}

</script>

<body   onload="disableSubmit()"  >

<h3 style="text-align:center;">Laptop Registration Form</h1>

 <form action="{{ url('calllaptopform') }}" method="POST">
    {{csrf_field()}}
<table align="center" cellpadding = "15">



  <tr>
  <td>Name of policy holder&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <?php
    $user = Auth::User();
    print_r($user->name);
    ?>
   </td>

       <td><input type="hidden" name="name" maxlength="100"/>  </td>
  </tr>


  <tr>
  <td>Aadhar number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <?php
    $user = Auth::User();
    print_r($user->aadharno);
    ?>
   </td>

       <td><input type="hidden" name="name" maxlength="100"/>  </td>
  </tr>


  <tr>
  <td>Mobile number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <?php
    $user = Auth::User();
    print_r($user->mobno);
    ?>
   </td>

       <td><input type="hidden" name="name" maxlength="100"/>  </td>
  </tr>



  <tr>
  <td>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <?php
    $user = Auth::User();
    print_r($user->email);
    ?>
   </td>

       <td><input type="hidden" name="name" maxlength="100"/>  </td>
  </tr>




<!----- First Name ---------------------------------------------------------->
<tr>
<td>LAPTOP BRAND</td>
<td><input type="text" name="laptopbrand" maxlength="100"/>

</td>
</tr>


<!----- MOBILE REGISTRATION NUMBER -------------------------------------------------------->
<tr>
<td>SERIAL NUMBER</td>


     <td><input type="text" name="serialnumber" maxlength="20"/>



</td>
</td>
</tr>
 <!--Model NUMBER------------------->
 <tr>
<td>MODEL NUMBER</td>


     <td><input type="text" name="modelnumber" maxlength="100"/>
	 </td>
</td>
</tr>



<!--PRODUCT NUMBER------------------->
 <tr>
<td>PRODUCT NUMBER</td>


     <td><input type="text" name="productnumber" maxlength="100"/>
	 </td>
</td>
</tr>
 <!-------------PURCHASING DATE-------------->





  <tr>

    <tr>
      <td>Select</td>
      <!--Calender--->
      <td>
        <select id="plan" name="policyplan">
        <option value="One">One year</option>
        <option value="Two">Two Year</option>
        <option value="Three">Three Year</option>
      </select>
      </td>
    </tr>

  <td>PURCHASING YEAR</td>

  <td>

          <input id="year" type="text" name="purchasingdate">
  </td>
  </tr>

  <!-------------------PRICE------------>
  <tr>
  <td>PRICE</td>


       <td><input id="price" type="text" name="price" onkeyup="solve()" maxlength="100"/></td>
  </tr>


 


  <tr>
  <td>AMOUNT TO BE PAID...</td>
        <td>
       <input id="amounttobepaid" name="amounttobepaid">
     </td>
  </tr>

  <tr>
  <td><a href="{{ url('/callidv') }}"> INSURED DECLARED VALUE(IDV) </a></td>
  <td>
  <input id="amountidv" name="amountidv">
  </td>
  </tr>








 <!-------------PURCHASING FROM-------------->

















<tr>
    <td>
        UPLOAD BILL
    </td>
    <td>
            <input type="file" name="uploadbill" />
    </td>
</tr>

<!-------UPLOAD PHOTO 1 FRONT---------->

<tr>
    <td>
        UPLOAD PHOTO(FRONT)
    </td>
    <td>
            <input type="file" name="uploadfront" />
    </td>
</tr>
<!----------------------UPLOAD PHOTO 2 BACK--->

<tr>
    <td>
        UPLOAD PHOTO(BACK)
    </td>
    <td>
            <input type="file" name="uploadback" />
    </td>
</tr>
 <!----------------------UPLOAD STICKER--->

<tr>
    <td>
        UPLOAD  PHOTO(STICKER) OF SERIAL NUMBER
    </td>
    <td>
            <input type="file" name="uploadserialnumber" />
    </td>
</tr>




<!----- Submit and Reset ------------------------------------------------->



<script>
 function disableSubmit() {
  document.getElementById("submit").disabled = true;
 }

  function activateButton(element) {

      if(element.checked) {
        document.getElementById("submit").disabled = false;
       }
       else  {
        document.getElementById("submit").disabled = true;
      }

  }
</script>



<tr>
<td colspan="2" align="center">
<input type="checkbox" name="terms" id="terms" onchange="activateButton(this)">
<a href="{{ url('/calllaptoptc') }}" >
  I Agree Terms & Coditions</a>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" id="submit">
<input type="reset" value="Reset">
</td>
</tr>




</table>

</form>

</body>
</html>
@endsection
