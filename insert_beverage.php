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

<body class="bg-dark" style="font-family: Rationale; text-align:center;text-transform:uppercase;">
    <div class="py-5" style="height: 100px;">
        <div class="container">
            <div class="row" style="text-align: left;">
                <div class="col-md-1"><a class="btn btn-primary" href="beveragemenu.html" style="background-color:#161719; border:1px solid black; color:#161719;"><img src="images/return.png" style="width:40px; height:40px;"></a></div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row" style="text-align: center;">
                <div class="col-md-12">
                    <form id="c_form-h" method="POST" action="add_beverage.php" enctype="multipart/form-data" style="font-size: 25px; text-align:center;">
                        <div class="form-group row">
                            <label class="col-2 col-form-label" style="color: #685F5F;">Beverage name</label>
                            <div class="col-3">
                                <input type="text" class="form-control" name="bevname" style="background-color:#161719; color:#EDB63C; font-size:25px;">
                            </div>
                            <label class="col-2 col-form-label" style="color: #685F5F;">STATUS</label>
                            <div class="col-3">
                                <select class="form-control" style="background-color:#161719; color:#EDB63C; font-size:25px;" name="status">
                                    <option>ACTIVE</option>
                                    <option>INACTIVE</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label" style="color: #685F5F;">price</label>
                            <div class="col-3">
                                <input type="text" class="form-control" name="price" style="background-color:#161719; color:#EDB63C; font-size:25px;">
                            </div>
                            <label class="col-2 col-form-label" style="color: #685F5F">Beverage TYPES</label>
                            <div class="col-3">
                                <select class="form-control" style="background-color:#161719; color:#EDB63C; font-size:25px;" name="bevtypes">
                                    <option>Drink</option>
                                    <option>Popcorn</option>
                                    <option>Snack</option>
                                </select>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>