<?php 
$con= mysqli_connect("localhost","root","","ChaoGuay") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' "); 
session_start();

        if(isset($_POST['Submit'])){
                //connection
        include("connection.php");
                $Username = $_POST['username'];
                $Password = $_POST['password'];
                $First_Name =  $_POST['first_name'];    
                $Last_Name = $_POST['last_name'];
                //query 

        $sql = "INSERT INTO admin (adminuser,adminpassword,adminfirstname,adminlastname) 
        VALUES ('$Username','$Password','$First_Name','$Last_Name')";

                $result = mysqli_query($con,$sql);

                if ($result){

                $row = mysqli_fetch_array($result);
                        Header("Location: login.html");
                }

        }
?>