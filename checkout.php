<?php
session_start();
$mysqli = new mysqli("localhost", "root", null, "ChaoGuay");
$idmovie = $_GET['idmovie'];
$query1 = "SELECT * FROM movie WHERE idmovie = $idmovie";
$result1 = $mysqli->query($query1);
$row = $result1->fetch_array();
$query2 = "SELECT * FROM promotion";
$result2 = $mysqli->query($query2);
$row1 = $result2->fetch_array();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    <link href="https://fonts.googleapis.com/css2?family=Rationale&display=swap" rel="stylesheet">
</head>

<body class="bg-dark" style="font-family: Rationale; text-align:center;text-transform:uppercase;">
    <div class="container">

        <form class="well form-horizontal" method="post" action="ticket.php" id="contact_form">
            

                <!--Black Widow-->

            <div class="py-5">
                <div class="container">
                    <div class="row" style="text-align: center;">
                            <div class="col-1"><a class="btn btn-primary" href="home.php" style="background-color:#161719; border:1px solid black; color:#161719;"><img src="images/return.png" style="width:40px; height:40px;"></a></div>
                            <span class="text-warning col-11" style="font-size:50px;right:4%;">Checkout</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 p-3">
                    <div class="card text-center text-dark" style="background-color: #EDB63C;">
                        <div class="card-body p-4">
                                <h3></h3>
                                <img src="<?php echo $row['linkimage'] ?>" style="width:200px; height:313px;"></a>
                                <p class="my-3"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3">
                    <div class="card text-center text-dark" style="background-color: #EDB63C;">
                        <div class="card-body p-4">
                            <div class="input-boxes">

                                <div class="input-box"> Movie ID<br>
                                    <input type="text" name="movieid" value="<?php echo $row['idmovie'] ?>">
                                </div><br>
                                <div class="input-box"> Movie Name <br>
                                    <input type="text" name="moviename" value="<?php echo $row['movie_name'] ?>">
                                </div><br>
                                <div class="input-box"> Seat No. <br>
                                    <input type="text" name="seat_no" placeholder="1-30" required>
                                </div><br>
                                <div class="input-box"> Seat Row. <br>
                                    <input type="text" name="row" placeholder="A-F" required>
                                </div><br>
                                <div class="input-box"> Cinema Type <br>
                                    <input type="text" name="theatype" value="<?php echo $row['theatretype'] ?>">
                                </div><br>
                                <div class=" input-box"> Cinema <br>
                                    <input type="text" name="theanum" value="<?php echo $row['theatrenumber'] ?>">
                                </div><br>
                                <div class=" input-box">Date&Time <br>
                                    <select class="form-control" name="times">
                                        <option>10.30</option>
                                        <option>11.00</option>
                                        <option>11.30</option>
                                        <option>12.00</option>
                                        <option>12.30</option>
                                        <option>13.00</option>
                                        <option>13.30</option>
                                        <option>14.00</option>
                                        <option>14.30</option>
                                        <option>15.00</option>
                                        <option>15.30</option>
                                        <option>16.00</option>
                                        <option>16.30</option>
                                        <option>17.00</option>
                                        <option>17.30</option>
                                        <option>18.00</option>
                                        <option>18.30</option>
                                        <option>19.00</option>
                                        <option>19.30</option>
                                        <option>20.00</option>
                                        <option>20.30</option>
                                        <option>21.00</option>
                                        <option>21.30</option>
                                        <option>22.00</option>
                                        <option>22.30</option>
                                    </select>
                                </div><br>
                                <div class="input-box">Price <br>
                                    <span>200 THB</span>
                                </div><br>
                                    <!--<div class="text"><a href="#">Forgot password?</a></div>-->

                            </div>
                        </div>
                    </div>
                </div>
                    <!--promotion-->
                <div class="col-md-4 p-3">
                    <div class="card text-center text-dark" style="background-color: #EDB63C;">
                        <div class="card-body p-4">
                            <label>Use Promotion</label>
                            <select name="promotion" class="form-control selectpicker">
                                <option value="">Select Promotion</option>
                                <option>Wednesday</option>
                                <option>Friday</option>
                                <option>True Card</option>
                                <option>AIS/SERENADE</option>
                            </select>
                        </div>
                    </div>
                        <!--payment-->
                    <div class="card text-center text-dark" style="background-color: #EDB63C;">
                        <div class="card-body p-4">
                            <label>Payment Method</label>
                            <select name="payment" class="form-control selectpicker">
                                <option value="">Select Payment</option>
                                <option>CASH</option>
                                <option>M-PASS</option>
                                <option>Credit Card</option>
                                <option>Debit Card</option>
                                <option>QR Payment</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="button input-box ">
                        <input class="btn-dark text-warning" type="submit" name="Submit" id="Submit" value="Proceed">
                    </div><br>
                </div>
            </div>

            
    
        </form>
    </div>

</body>

</html>