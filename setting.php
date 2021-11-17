<?php
session_start();
$mysqli = new mysqli("localhost", "root", null, "ChaoGuay");
$idadmin = $_SESSION['idadmin'];
$query1 = "SELECT * FROM admin WHERE idadmin = '$idadmin'";
$result = $mysqli->query($query1);
if (!$result) {
    echo "Select failed!<br/>";
    echo $mysqli->error;
} else {
    $admin = $result->fetch_array();
}

?>
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

<body style="font-family: Rationale; text-align:center; background:linear-gradient(to right,#161719 0%,#161719 50%,#EDB63C 50%,#EDB63C 100%);">
    <div class="py-5" style="width: 700px;">
        <div class="container">
            <div class="row" style="text-align: left;">
                <div class="col">
                    <a class="btn btn-primary" href="home.php" style="background-color:#161719; border:1px solid black; color:#161719; left:24%; position:relative;">
                        <img src="images/return.png" style="width:40px; height:40px;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col" style="width: 700px;">
        <div class="py-5" style="width: 700px;">
            <div class="container">
                <div class="row" style="text-align: left;">
                    <h1 style="position: absolute;width: 569px;height: 82px;left: 119px;top: 202px;font-family: Rationale;font-style: normal;font-weight: normal;font-size: 70px;line-height: 81px;display: flex;align-items: center;color: #EDB63C;">
                        ACCOUNT
                    </h1>
                </div>
                <div class="row">
                    <span style="position: absolute;width: 593px;height: 82px;left: 119px;top: 291px;font-family: Rationale;font-style: normal;font-weight: normal;font-size: 40px;line-height: 58px;display: flex;align-items: center;color: #EDB63C;">
                        USERNAME : <?php echo $admin["adminuser"] ?>
                    </span>
                </div>
                <div class="row">
                    <span style="position: absolute;width: 593px;height: 82px;left: 119px;top: 373px;font-family: Rationale;font-style: normal;font-weight: normal;font-size: 40px;line-height: 58px;display: flex;align-items: center;color: #EDB63C;">
                        FIRST NAME : <?php echo $admin["adminfirstname"] ?>
                    </span>
                </div>
                <div class="row">
                    <span style="position: absolute;width: 593px;height: 82px;left: 119px;top: 455px;font-family: Rationale;font-style: normal;font-weight: normal;font-size: 40px;line-height: 58px;display: flex;align-items: center;color: #EDB63C;">
                        LAST NAME : <?php echo $admin["adminlastname"] ?>
                    </span>
                </div>
                <div class="row">
                    <span style="position: absolute;width: 720px;height: 70px;left: 0px;top: 624px;background: #685F5F;border: 2px solid #161719;box-sizing: border-box;">
                        <a href="#" style="position: absolute;width: 500px;height: 70px;left: 20%;top: 0px;font-family: Rationale;font-style: normal;font-weight: normal;font-size: 40px;line-height: 58px;display: flex;align-items: center;text-align: center;color: #EDB63C;">
                            ACCOUNT INFORMATION
                        </a>
                    </span>
                </div>
                <div class="row">
                    <span style="position: absolute;width: 720px;height: 70px;left: 0px;top: 727px;background: #685F5F;border: 2px solid #161719;box-sizing: border-box;">
                        <a href="#" style="position: absolute;width: 500px;height: 70px;left: 20%;top: 0px;font-family: Rationale;font-style: normal;font-weight: normal;font-size: 40px;line-height: 58px;display: flex;align-items: center;text-align: center;color: #EDB63C;">
                            DELETE ACCOUNT
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col" style="width: 700px;">
        <div class="py-5">
            <span style="position: relative;
width: 206px;
height: 82px;
left: 76px;
top: 120px;

font-family: Rationale;
font-style: normal;
font-weight: normal;
font-size: 50px;
line-height: 58px;
display: flex;
align-items: center;

color: #000000;">USERNAME</span>
        </div>
    </div>


</body>

</html>