<html>
<head>
</head>


<body onload="foo()" >

  <h1> DONE DONE DONE </h1>

  <form action=" {{ url('/') }} " id="search-theme-formthree"  >
   {{csrf_field()}}


 <button type="submit" class="btn btn-success">Print Policy</button>
 </form>

</body>
</html>
