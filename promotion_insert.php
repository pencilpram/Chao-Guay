<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rationale&display=swap" rel="stylesheet">
</head>

<body class="bg-dark" style="font-family: Rationale; text-align:center;">
    <div class="py-5" style="height: 100px;">
        <div class="container">
            <div class="row" style="text-align: left;">
                <div class="col-md-1"><a class="btn btn-primary" href="promotion.php" style="background-color:#161719; border:1px solid black; color:#161719;"><img src="images/return.png" style="width:40px; height:40px;"></a></div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row" style="text-align: center;">
                <div class="col-md-12">
                    <form id="c_form-h" method="POST" action="promotion_list.php" enctype="multipart/form-data" style="font-size: 25px; text-align:center;">
                        <div class="form-group row">
                            <label class="col-2 col-form-label" style="color: #685F5F;">PROMOTION NAME</label>
                            <div class="col-3">
                                <input type="text" class="form-control" name="promotionname" style="background-color:#161719; color:#EDB63C; font-size:25px;">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label" style="color: #685F5F;">PROMOTION DETAIL</label>
                            <div class="col-3">
                                <input type="text" class="form-control" name="promotiondetail" style="background-color:#161719; color:#EDB63C; font-size:25px;">
                            </div>
                        
                        </div>

                    

                        <div class="form-group row">
                            <label class="col-2 col-form-label" style="color: #685F5F;">IMAGES</label>
                            <div class="col-3" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input class="form-control" type="file" name="promotionimage" style="background-color: #161719; color:#EDB63C; font-size:22px;width:730px;">
                            </div>
                        </div>

                        <div class="form-group row">
                            <input class="form-control" type="submit" name="add" value="ADD" style="background-color:#EDB63C; color:#161719; font-size:25px; margin-top:10%;">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    $mysqli = new mysqli("localhost", "root", null, "ChaoGuay");
    if (isset($_POST['add'])) {
        $promotionname = $_POST['promotionname'];
        $promotiondetail = $_POST['promotiondetail'];
        date_default_timezone_set("Asia/Bangkok");
        //$today = CURRENT_TIMESTAMP();
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["promotionimage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $idadmin = $_SESSION['idadmin'];
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["promotionimage"]["tmp_name"]);
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
        $query1 = "INSERT INTO promotion (promotionname,detail,linkimage) 
        VALUES ('$promotionname','$promotiondetail','$target_file')";
        $result1 = $mysqli->query($query1);
        if ($result1) {
            Header("Location: promotion_list.php");
        } else {
            echo $mysqli->error;
        }
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
