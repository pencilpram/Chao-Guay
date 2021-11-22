<?php
session_start();
$mysqli = new mysqli("localhost", "root", null, "ChaoGuay");
if (isset($_POST['Submit'])) {
    $moviename = $_POST['moviename'];
    $noseat = $_POST['seat_no'];
    $rowseat = $_POST['row'];
    $type = $_POST['theatype'];
    $theatreno = $_POST['theanum'];
    $times = $_POST['times'];
    if ($_POST['promotion'] == 'Wednesday'){
        $promo = 3;
    }elseif ($_POST['promotion'] == 'Friday'){
        $promo = 4;
    } elseif ($_POST['promotion'] == 'True Card') {
        $promo = 5;
    }else{
        $promo = 6;
    }
    $idseat = $_POST['seat_no'];
    $idthea = $theatreno;
    $pay = $_POST['payment'];
    $idadmin = $_SESSION['idadmin'];
    date_default_timezone_set("Asia/Bangkok");
    $date = date('Y-m-d');

    $insert = "INSERT INTO bookingticket (movie_name,row,seat_no,date,time,theatre_no,theatretype,idadmin,idpromotion,idseat,idtheatre) VALUES ('$moviename','$rowseat','$noseat','$date','$times','$theatreno','$type','$idadmin','$promo','$idseat','$idthea')";
    $insert_result = $mysqli->query($insert);
}
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
                <div class="col-md-12"><a class="btn btn-primary" href="home.php" style="background-color:#161719; border:1px solid black; color:#161719;"><img src="images/home.png" style="width:40px; height:40px;"></a></div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>