@extends('layouts.app')

@section('content')


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
                      $sql1 = "SELECT * FROM carforms WHERE aadharno = $user->aadharno  ";
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
                          /*
                        ?>
                          <td>
                            <a href="" class="btn btn-success">Detail</a>
                         </td>

                        <?php
                        */
                                  echo "</tr>";

                              }

                              // Free result set
                              mysqli_free_result($result);
                          }
                      }

                      $sql2 = "SELECT * FROM bikeforms WHERE aadharno = $user->aadharno  ";
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

                                      /*
                                      ?>
                                        <td>
                                          <a href="" class="btn btn-success">Detail</a>
                                       </td>

                                      <?php
                                      */

                                  echo "</tr>";

                              }

                              // Free result set
                              mysqli_free_result($result);
                          }
                      }

                      $sql3 = "SELECT * FROM Mobileforms WHERE aadharno = $user->aadharno  ";
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
                                      /*
                                      ?>
                                        <td>
                                          <a href="" class="btn btn-success">Detail</a>
                                       </td>

                                      <?php
                                      */

                                  echo "</tr>";

                              }

                              // Free result set
                              mysqli_free_result($result);
                          }
                      }

                      $sql4 = "SELECT * FROM Laptopforms WHERE aadharno = $user->aadharno  ";
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
                                      /*
                                      ?>
                                        <td>
                                          <a href="" class="btn btn-success">Detail</a>
                                       </td>

                                      <?php
                                      */

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

@endsection
