<html>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superfinal";
$myid = $_POST["id"];
$myaction = $_POST["actiontype"];
$mytype = $_POST["POLICY_FOR"];



$conn = mysqli_connect($servername, $username, $password, $dbname);


if( $mytype == "Car" ){
if( $myaction == "Accepted")
{
$sql = "UPDATE carforms set status = 'Accepted' where id =  $myid  ";
}else{
$sql = "UPDATE carforms set status = 'Rejected' where id =  $myid  ";
}
}elseif ($mytype == "Bike") {
  if( $myaction == "Accepted")
  {
  $sql = "UPDATE bikeforms set status = 'Accepted' where id =  $myid  ";
  }else{
  $sql = "UPDATE bikeforms set status = 'Rejected' where id =  $myid  ";
  }
}elseif ($mytype == "Mobile"){
  if( $myaction == "Accepted")
  {
  $sql = "UPDATE mobileforms set status = 'Accepted' where id =  $myid  ";
  }else{
  $sql = "UPDATE mobileforms set status = 'Rejected' where id =  $myid  ";
  }
}elseif ($mytype == "Laptop"){
  if( $myaction == "Accepted")
  {
  $sql = "UPDATE laptopforms set status = 'Accepted' where id =  $myid  ";
  }else{
  $sql = "UPDATE laptopforms set status = 'Rejected' where id =  $myid  ";
  }
}




if (mysqli_query($conn, $sql)) {
    echo "Updated...";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





mysqli_close($conn);
?>

  <input type="button" value="Go back!" onclick="history.back()">

</body>
</html>
