@extends('layouts.submaster')

@section('content')

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

<button class="open-button" onclick="openForm()">Action</button>

<div class="form-popup" id="myForm">
  <form action="action.php" class="form-container" method="POST">
    <h1>Confirm</h1>

    <label for="email"><b>Process Id</b></label>
    <input type="text" placeholder="Enter Process Id" name="id" required>


    <div class="form-group">
        <label>Policy For</label>
            <select name="POLICY_FOR" class="form-control" >
                <option value="Car">Car</option>
                <option value="Bike">Bike</option>
                <option value="Mobile">Mobile</option>
                <option value="Laptop">Laptop</option>
             </select>
    </div>


    <div class="form-group">
        <label>Action</label>
            <select name="actiontype" class="form-control" >
                <option value="Accepted">Accept</option>
                <option value="Rejected">Reject</option>
                                 </select>
    </div>
      <button style="background-color: #f44336;" type="submit" class="btn">Process</button>
    <button style="background-color: #555555;" type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>



<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                    </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">


                  <table class="table">
                    <thead class=" text-primary">
                      <th>POLICY_ID</th>
                      <th>POLICY_FOR</th>
                      <th>PRICE(On_bill)</th>
                      <th>YEAR(On_bill)</th>
                      <th>STARTING FROM</th>
                      <th>ENDING AT</th>
                      <th>POLICY_AMOUNT</th>
                      <th>IDV(On_claim)</th>
                      <th>STATUS</th>
                    </thead>
                    <tbody>

                        <?php
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "superfinal";

                      $link = mysqli_connect($servername, $username, $password, $dbname);
                      if($link === false){
                          die("ERROR: Could not connect. " . mysqli_connect_error());
                      }
                      $user = Auth::User();
                      $sql1 = "SELECT * FROM carforms WHERE status = 'Pending'  ";
                      if($result = mysqli_query($link, $sql1)){
                          if(mysqli_num_rows($result) > 0){

                              while($row = mysqli_fetch_array($result)){
                                  echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";

                                      echo "<td>" . "CAR" . "</td>";
                                        echo "<td>" . $row['price'] . "</td>";
                                          echo "<td>" . $row['purchasingdate'] . "</td>";
                                      echo "<td>" . $row['start'] . "</td>";
                                      echo "<td>" . $row['end'] . "</td>";
                                      echo "<td>" . $row['amounttobepaid'] . "</td>";
                                      echo "<td>" . $row['amountidv'] . "</td>";
                                      echo "<td>" . $row['status'] . "</td>";

                        ?>
                        <td>
                            <a href="" class="btn btn-success">Detail</a>
                         </td>
                        <td>
                              <a href="/action" class="btn btn-success">Action</a>
                        </td>
                        <?php

                                  echo "</tr>";

                              }

                              // Free result set
                              mysqli_free_result($result);
                          }
                      }

                      $sql2 = "SELECT * FROM bikeforms WHERE status = 'Pending'  ";
                      if($result = mysqli_query($link, $sql2)){
                          if(mysqli_num_rows($result) > 0){

                              while($row = mysqli_fetch_array($result)){
                                  echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                      echo "<td>" . "BIKE" . "</td>";
                                      echo "<td>" . $row['price'] . "</td>";
                                        echo "<td>" . $row['purchasingdate'] . "</td>";
                                      echo "<td>" . $row['start'] . "</td>";
                                      echo "<td>" . $row['end'] . "</td>";
                                      echo "<td>" . $row['amounttobepaid'] . "</td>";
                                      echo "<td>" . $row['amountidv'] . "</td>";
                                      echo "<td>" . $row['status'] . "</td>";


                                      ?>
                                      <td>
                                          <a href="" class="btn btn-success">Detail</a>
                                       </td>
                                      <td>
                                            <a href="/action" class="btn btn-success">Action</a>
                                      </td>
                                      <?php

                                  echo "</tr>";

                              }

                              // Free result set
                              mysqli_free_result($result);
                          }
                      }

                      $sql3 = "SELECT * FROM Mobileforms WHERE status = 'Pending'  ";
                      if($result = mysqli_query($link, $sql3)){
                          if(mysqli_num_rows($result) > 0){

                              while($row = mysqli_fetch_array($result)){
                                  echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                      echo "<td>" . "MOBILE" . "</td>";
                                      echo "<td>" . $row['price'] . "</td>";
                                        echo "<td>" . $row['purchasingdate'] . "</td>";
                                      echo "<td>" . $row['start'] . "</td>";
                                      echo "<td>" . $row['end'] . "</td>";
                                      echo "<td>" . $row['amounttobepaid'] . "</td>";
                                      echo "<td>" . $row['amountidv'] . "</td>";
                                      echo "<td>" . $row['status'] . "</td>";

                                      ?>
                                      <td>
                                          <a href="" class="btn btn-success">Detail</a>
                                       </td>
                                      <td>
                                            <a href="/action" class="btn btn-success">Action</a>
                                      </td>
                                      <?php


                                  echo "</tr>";

                              }

                              // Free result set
                              mysqli_free_result($result);
                          }
                      }

                      $sql4 = "SELECT * FROM Laptopforms WHERE status = 'Pending'  ";
                      if($result = mysqli_query($link, $sql4)){
                          if(mysqli_num_rows($result) > 0){

                              while($row = mysqli_fetch_array($result)){
                                  echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                      echo "<td>" . "LAPTOP" . "</td>";
                                      echo "<td>" . $row['price'] . "</td>";
                                        echo "<td>" . $row['purchasingdate'] . "</td>";
                                      echo "<td>" . $row['start'] . "</td>";
                                      echo "<td>" . $row['end'] . "</td>";
                                      echo "<td>" . $row['amounttobepaid'] . "</td>";
                                      echo "<td>" . $row['amountidv'] . "</td>";
                                      echo "<td>" . $row['status'] . "</td>";
                                      ?>
                                      <td>
                                          <a href="" class="btn btn-success">Detail</a>
                                       </td>
                                      <td>
                                            <a href="/action" class="btn btn-success">Action</a>
                                      </td>
                                      <?php


                                  echo "</tr>";

                              }

                              // Free result set
                              mysqli_free_result($result);
                          }
                      }


                      // Close connection
                      mysqli_close($link);
                      ?>

                    </tbody>
                  </table>


                </div>
              </div>
            </div>
          </div>
        </div>

      </body>
      </html>


@endsection
