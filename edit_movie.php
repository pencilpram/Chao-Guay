<?php
session_start();
$mysqli = new mysqli("localhost", "root", null, "ChaoGuay");

$moviename = $_POST['moviename'];
$genre = $_POST['genre'];
$minutes = $_POST['minutes'];
if ($_POST['status'] == 'ACTIVE') {
    $status = 1;
} else {
    $status = 0;
}
$theatrenumber = $_POST['theatrenumber'];
$theatretypes = $_POST['theatretypes'];
date_default_timezone_set("Asia/Bangkok");
//$today = CURRENT_TIMESTAMP();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["movieimage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$idmovie = $_SESSION['idmovie'];

// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["movieimage"]["tmp_name"]);
if ($check !== false) {
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["movieimage"]["tmp_name"], $target_file)) {
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
if (isset($_POST["add"])){
    
 
  $update_sql = "UPDATE movie SET movie_name='$moviename',genre='$genre', minutes='$minutes',status='$status',theatrenumber='$theatrenumber',theatretype='$theatretypes',linkimage='$target_file' ";
  $result = $mysqli->query($update_sql);
 
  if ($result) {
      Header("Location: movielist.php");
  } else {
      echo $mysqli->error;
  }

}
?>