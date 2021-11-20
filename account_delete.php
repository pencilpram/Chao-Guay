<?php
session_start();
$mysqli = new mysqli("localhost", "root", null, "ChaoGuay");
$idadmin = $_SESSION['idadmin'];
$query1 = "SELECT * FROM admin WHERE idadmin = '$idadmin'";
$result1 = $mysqli->query($query1);
$admin = $result1->fetch_array();
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

<body class="bg-dark" style="font-family: Rationale; text-align:center;text-transform:uppercase;">
    <div class="py-5">
        <div class="container">
            <div class="row" style="text-align: left;">
                <div class="col-md-12"><a class="btn btn-primary" href="home.php" style="background-color:#161719; border:1px solid black; color:#161719;"><img src="images/return.png" style="width:40px; height:40px;"></a></div>
                <span style="position: absolute;width: 569px;height: 82px;left: 520px;font-family: Rationale;font-style: normal;font-weight: normal;font-size: 70px;line-height: 81px;display: flex;align-items: center;text-align: center;color: #EDB63C;">DELETE ACCOUNT</span>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <span style="font-family: Rationale;font-style: normal;font-weight: normal;font-size: 50px;line-height: 58px;color: #EDB63C;">
            USERNAME : <?php echo $admin['adminuser'] ?>
        </span>
        </div>
    </div>