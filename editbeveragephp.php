<?php
session_start();
$mysqli = new mysqli("localhost", "root", null, "ChaoGuay");

if (isset($_POST['add'])) {
    $bevname = $_POST['bevname'];
    if ($_POST['status'] == 'ACTIVE') {
        $status = 1;
    } else {
        $status = 0;
    }
    $price = $_POST['price'];
    $bevtypes = $_POST['bevtypes'];
    date_default_timezone_set("Asia/Bangkok");
    //$today = CURRENT_TIMESTAMP();
    $idfood = $_SESSION['idfood'];

    // Check if image file is a actual image or fake image

    $query1 = "UPDATE beverage SET foodname = '$bevname',beveragetypes = '$bevtypes',prices ='$price',snackstatus='$status' ";
        
    $result1 = $mysqli->query($query1);
    header("Location: beverage50.php");
}


//get the account information

