<?php
session_start();
$mysqli = new mysqli("localhost", "root", null, "ChaoGuay");
$idadmin = $_SESSION['idadmin'];
$password = $_POST['password'];
$reenterpass = $_POST['reenterpassword'];
$query1 = "SELECT * FROM admin WHERE idadmin = '$idadmin'";
$result1 = $mysqli->query($query1);
$admin = $result1->fetch_array();

if (isset($_POST['delete'])){
    if ($password == $reenterpass){
        if ($password == $admin['adminpassword']){
            $delete_query = "DELETE FROM admin WHERE idadmin = '$idadmin'";
            $delete_result = $mysqli->query($delete_query);
            if (!$delete_result){
                echo "Delete fail<br>";
                echo $mysqli->error;
            }else{
                header("Location: login.html");
            }
        }else{
            echo "password is incorrect";
        }
    }else{
        echo "password and re-enter password is not match";
    }
}
?>