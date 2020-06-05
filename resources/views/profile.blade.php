
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
                      $sql1 = "SELECT uploadfile FROM users WHERE id=2";

                            $sth = $link->query($sql1);
                            $result=mysqli_fetch_array($sth);
                            echo '<img height=100px width=100px src="data:image/jpeg;base64,'.base64_encode( $result['uploadfile'] ).'"/>';

                        ?>
