@extends('layouts.footer')
@section('content')
@extends('layouts.app')

@section('content')
<html>
<head>
<title>Bike Renewal</title>
<link rel="stylesheet" type="text/css" href="css/bike_form.css">
</head>




<script>

function solve()
    {

  /*let test= document.getElementById("year").value;*/
  var test={{$post->purchasingdate}};
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


<body  onload="disableSubmit()" >

<h3 style="text-align:center;">Bike Renewal</h1>

<form action="{{url('/renewalupdate')}}" method="POST">
{{csrf_field()}}

<table align="center" cellpadding = "15">

<!----- First Name ---------------------------------------------------------->



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
<tr>
<td>POLICY NO:</td>
   <td><input id="id" type="text" name="id" value="{{$post->id}}" readonly></td>
 </tr>
<tr>
 <td>PURCHASING YEAR:</td>

 <td>

         <input id="year" type="text" name="purchasingdate" value="{{$post->purchasingdate}}" readonly>
 </td>
 </tr>

 <!-------------------PRICE------------>
 <tr>
 <td>PRICE</td>


      <td><input id="price" type="text" name="price" value="{{$post->price}}" readonly></td>
 </tr>



 <tr>
 <td colspan="2" align="center">
 <button type="button" class="btn btn-primary" onclick="solve()" >Check</button>
 </td>
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
<a href="{{ url('/callbiketc') }}" >
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
<br>
<br>
<br>
@endsection
