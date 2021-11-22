<?php
session_start();
    $mysqli = new mysqli("localhost", "root", null, "ChaoGuay");
    if (isset($_POST['add'])) {
        $promotionname = $_POST['promotionname'];
        $promotiondetail = $_POST['promotiondetail'];
        
        //$today = CURRENT_TIMESTAMP();
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["promotionimage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["promotionimage"]["tmp_name"]);
        $idadmin = $_SESSION['idadmin'];
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
            if (move_uploaded_file($_FILES["promotionimage"]["tmp_name"], $target_file)) {
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        $query1 = "INSERT INTO promotion (promotionname,detail,linkimage,idadmin) 
        VALUES ('$promotionname','$promotiondetail','$target_file','$idadmin')";
        $result1 = $mysqli->query($query1);
        if ($result1) {
            Header("Location: promotion_list.php");
        } else {
            echo $mysqli->error;
        }
    }
    ?>