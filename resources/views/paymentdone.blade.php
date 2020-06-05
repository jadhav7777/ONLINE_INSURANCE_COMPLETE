<html>
<head>
</head>


<body onload="foo()" >

  <h1> DONE DONE DONE </h1>


  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superfinal";

$link = mysqli_connect($servername, $username, $password, $dbname);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}




$pre = "SELECT aadharno from payments";

if($res = mysqli_query($link, $pre))
{
  while($r = mysqli_fetch_array($res)){
      $aadharno = mysqli_real_escape_string($link, $r['aadharno'] );
      $pretwo = "INSERT INTO policy (type,aadharno) VALUES ('Car','$aadharno')";
      mysqli_query($link, $pretwo);
  }
}
/*
$temp="UPDATE payments set id=(SELECT COUNT(*) FROM policy)";
mysqli_query($link, $temp);
*/
$sql = "INSERT INTO carforms
SELECT * FROM payments";

if($result = mysqli_query($link, $sql)){

$sqltwo = "DELETE from payments";
mysqli_query($link, $sqltwo);

}


mysqli_close($link);
?>

  <form action=" {{ url('/') }} " id="search-theme-formthree"  >
   {{csrf_field()}}


 <button type="submit" class="btn btn-success">Print Policy</button>
 </form>

</body>
</html>
