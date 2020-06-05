@extends('layouts.submaster')

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
                      <th>Serial_No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Time</th>
                      
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
                      $sql1 = "SELECT * FROM contacts";
                      if($result = mysqli_query($link, $sql1)){
                          if(mysqli_num_rows($result) > 0){

                              while($row = mysqli_fetch_array($result)){
                                  echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";

                                      
                                        echo "<td>" . $row['Fullname'] . "</td>";
                                          echo "<td>" . $row['Email'] . "</td>";
                                      echo "<td>" . $row['Subject'] . "</td>";
                                      echo "<td>" . $row['Message'] . "</td>";
                                      echo "<td>" . $row['created_at'] . "</td>";
                                      

                        
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
