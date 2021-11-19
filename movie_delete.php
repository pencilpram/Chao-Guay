<?php
// Connect to the database
$mysqli = new mysqli("localhost", "root", null, "ChaoGuay");

if ($mysqli->connect_errno) {
  echo $mysqli->connect_error;
}

if (isset($_GET["idmovie"])){

  $idmovie = $_GET["idmovie"];
  
  // Exercise 2: Fill in command line to delete the row by email

  $delete_sql = "DELETE FROM movie WHERE idmovie='$idmovie'";
  $result = $mysqli->query($delete_sql);

  if (!$result){
      echo "Delete failed!<br/>";
      echo $mysqli->error;
  } else {
    header( "location: movielist_delete.php" );
  }
}

?>