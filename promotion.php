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

    <div class="py-5">
        <div class="row" >
                <div class="col-md-12"><a class="btn btn-primary" href="home.php"
                    style="background-color:#161719; border:1px solid black; color:#161719;">
                    <img
                    src="images/return.png" style="width:40px; height:40px;"></a>
                </div>
                <div class="text-center mx-auto col-md-12">
                            
                </div>
            </div>
        <div class="container" style="margin-top: 20%; margin-left:10%; margin-left:16%;">
            <div class="row">
                <div class="col-md-2"><a class="btn btn-primary" style="height:100px; width:100px; background-color:#EDB63C; background-image:'images/ticket.png';border:1px solid black; color:#161719; position:relative; padding-top:24%;" href="promotion_insert.php">Insert</a>
                </div>
                <div class="col-md-2"><a class="btn btn-primary" style="height:100px; width:100px; background-color:#EDB63C; border:1px solid black; color:#161719; position:relative; padding-top:24%;" href="promotion_delete.php">Delete</a>
                </div>
                
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="">
        <div class="container"> <a class="navbar-brand" href="#">
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar11">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar11">
            </div>
        </div>
        
    </nav>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>