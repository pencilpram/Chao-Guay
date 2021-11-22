<?php
// Connect to the database
$mysqli = new mysqli("localhost", "root", null, "ChaoGuay");

if ($mysqli->connect_errno) {
  echo $mysqli->connect_error;
}

if (isset($_GET["idticket"])){

  $idticket = $_GET["idticket"];
  
  // Exercise 2: Fill in command line to delete the row by email

  $delete_sql = "DELETE FROM bookingticket WHERE idticket='$idticket'";
  $result = $mysqli->query($delete_sql);

  if (!$result){
      echo "Delete failed!<br/>";
      echo $mysqli->error;
  } else {
    header( "location: cancel_ticket.php" );
  }
}

?>