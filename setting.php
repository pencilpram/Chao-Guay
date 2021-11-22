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
    <div class="col" style="width: 700px;top:-30%;">
        <div class="py-5" style="width: 700px; top:-40%;">
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
                        <a href="setting.php" style="position: absolute;width: 500px;height: 70px;left: 20%;top: 0px;font-family: Rationale;font-style: normal;font-weight: normal;font-size: 40px;line-height: 58px;display: flex;align-items: center;text-align: center;color: #EDB63C;">
                            ACCOUNT INFORMATION
                        </a>
                    </span>
                </div>
                <div class="row">
                    <span style="position: absolute;width: 720px;height: 70px;left: 0px;top: 727px;background: #685F5F;border: 2px solid #161719;box-sizing: border-box;">
                        <a href="account_delete.php" style="position: absolute;width: 500px;height: 70px;left: 20%;top: 0px;font-family: Rationale;font-style: normal;font-weight: normal;font-size: 40px;line-height: 58px;display: flex;align-items: center;text-align: center;color: #EDB63C;">
                            DELETE ACCOUNT
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col" style="width: 700px;left:50%;top:-57%;">
        <div class="py-5">
            <form id="c_form-h" method="POST" action="editprofile.php">
                <span style="position: absolute;
width: 206px;
height: 82px;
left: 76px;
top: 193px;

font-family: Rationale;
font-style: normal;
font-weight: normal;
font-size: 50px;
line-height: 58px;
display: flex;
align-items: center;

color: #000000;">FIRSTNAME</span>
                <input type="text" style="position: absolute;
width: 318px;
height: 55px;
left: 327px;
top: 203px;

background: #FFFFFF;
border: 2px solid #161719;
box-sizing: border-box;font-size:25px;" name="firstname">
                <span style="position: absolute;
width: 211px;
height: 82px;
left: 76px;
top: 284px;

font-family: Rationale;
font-style: normal;
font-weight: normal;
font-size: 50px;
line-height: 58px;
display: flex;
align-items: center;

color: #000000;">LASTNAME</span>
                <input type="text" style="position: absolute;
width: 318px;
height: 55px;
left: 327px;
top: 295px;

background: #FFFFFF;
border: 2px solid #161719;
box-sizing: border-box;font-size:25px;" name="lastname">
                <span style="position: absolute;
width: 211px;
height: 82px;
left: 76px;
top: 366px;

font-family: Rationale;
font-style: normal;
font-weight: normal;
font-size: 50px;
line-height: 58px;
display: flex;
align-items: center;

color: #000000;">PASSWORD</span>
                <input type="text" style="position: absolute;
width: 318px;
height: 55px;
left: 327px;
top: 379px;

background: #FFFFFF;
border: 2px solid #161719;
box-sizing: border-box;font-size:25px;" name="password">
                <input type="submit" value="UPDATE" name="update1" style="position: absolute;
width: 188px;
height: 48px;
left: 457px;
top: 464px;
font-size:30px;
background: #F01B1B;
color:#FFFFFF;
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 11px;">
                <span style="position: absolute;
width: 211px;
height: 140px;
left: 76px;
top: 567px;

font-family: Rationale;
font-style: normal;
font-weight: normal;
font-size: 50px;
line-height: 58px;
display: flex;
align-items: center;

color: #000000;">CURRENT PASSWORD</span>
                <input type="text" style="position: absolute;
width: 318px;
height: 55px;
left: 327px;
top: 600px;

background: #FFFFFF;
border: 2px solid #161719;
box-sizing: border-box;font-size:25px;" name="currentpass">
                <span style="position: absolute;
width: 211px;
height: 140px;
left: 76px;
top: 707px;

font-family: Rationale;
font-style: normal;
font-weight: normal;
font-size: 50px;
line-height: 58px;
display: flex;
align-items: center;

color: #000000;">NEW PASSWORD</span>
                <input type="text" style="position: absolute;
width: 318px;
height: 55px;
left: 327px;
top: 744px;

background: #FFFFFF;
border: 2px solid #161719;
box-sizing: border-box;font-size:25px;" name="newpass">
                <input type="submit" value="UPDATE" name="update2" style="position: absolute;
width: 188px;
height: 48px;
left: 466px;
top: 881px;
font-size:30px;
background: #F01B1B;
color:#FFFFFF;
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 11px;">
            </form>
        </div>
    </div>
</body>

</html>