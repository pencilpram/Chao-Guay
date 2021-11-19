<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    </head>

<body class="bg-dark" style="font-family: Rationale; text-align:center;">
    <div class="container">
    
        <form class="well form-horizontal" method="post" action="signup.php"  id="contact_form">
            <fieldset>

                <!--Black Widow-->
        
                <div class="py-5"  >
                    <div class="container">
                        <div class="row" >
                            <div class="col-md-12"><a class="btn btn-primary" href="home.php"
                                style="background-color:#161719; border:1px solid black; color:#161719;">
                                <img
                                src="images/return.png" style="width:40px; height:40px;"></a>
                            </div>
                            <div class="text-center mx-auto col-md-12">
                            
                            </div>
                        </div>
                        <h1 class="text-warning">Checkout</h1>
                    </div>        
                    <div class="row">
                        <div class="col-md-4 p-3">
                            <div class="card text-center text-dark" style="background-color: #EDB63C;">
                                <div class="card-body p-4" >
                                <h3></h3>
                                <a 
                                style="background-color:#161719; border:1px solid black; color:#161719;"><img
                                src="images/blackwidow.jpg" style="width:200px; height:313px;"></a>
                                <p class="my-3"></p>
                
                            </div>
                        </div>
                    </div>
                        <div class="col-md-4 p-3">
                            <div class="card text-center text-dark" style="background-color: #EDB63C;">
                                <div class="card-body p-4">
                                    <div class="input-boxes">
                            
                                        <div class="input-box"> Movie Name <br>
                                            <input type="text" name="movie_name" placeholder="Black Widow" required>
                                        </div><br>
                                        <div class="input-box">Seat Type<br>
                                            <input type="text" name="seat_type" placeholder="Honeymoon" required>
                                        </div><br>
                                        <div class="input-box"> Seat No. <br>
                                            <input type="text" name="seat_no" placeholder="A-1" required>
                                        </div><br>
                                        <div class="input-box"> Cinema Type <br>
                                            <input type="text" name="cinema_type" placeholder="4DX" required>
                                        </div><br>
                                        <div class="input-box"> Cinema <br>
                                            <input type="text" name="cinema" placeholder="1" required>
                                        </div><br>
                                        <div class="input-box">Date&Time <br>
                                            <input type="text" name="date_time" placeholder="05/10/2021 - 12.00" required>
                                        </div><br>
                                        <div class="input-box">Price <br>
                                            <input type="text" name="price" placeholder="200.00 THB" required>
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
                                        <option>Wednesday: 100 THB</option>
                                        <option>Friday Night: 120 THB</option>
                                        <option>TRUE Card: 99 THB</option>
                                        <option>AIS/SERENADE: 129 THB</option>
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
            </fieldset>
        </form>
    </div>

</body>

</html>