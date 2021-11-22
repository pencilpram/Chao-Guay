<?php
session_start();
$mysqli = new mysqli("localhost", "root", null, "ChaoGuay");

if (isset($_POST['add'])) {
    $seat = $_POST['seatno'];
    

    // Check if image file is a actual image or fake image

    $query1 = "UPDATE bookingticket SET seat_no = '$seat'";
        
    $result1 = $mysqli->query($query1);
    header("Location: edit_ticket.php");
}


//get the account information

