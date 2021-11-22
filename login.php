<?php
$con= mysqli_connect("localhost","root","","ChaoGuay") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' "); 
session_start();
        if(isset($_POST['Submit'])){
                //connection

                $Username = $_POST['Login'];
                $Password = $_POST['Password'];
                //query 
                echo "$Username";
                echo "$Password";
                  $sql="SELECT * FROM admin Where adminuser = '$Username' and adminpassword = '$Password'";

                $result = mysqli_query($con,$sql);

                if(mysqli_num_rows($result)==1){

                    $row = mysqli_fetch_array($result);
                    $_SESSION['idadmin']=$row['idadmin'];
                        Header("Location: home.php");
                    }

                }
            else{
                echo "<script>";
                echo "window.history.back()";
                echo "</script>";

                }


?>