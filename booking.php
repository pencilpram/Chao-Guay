<?php

$mysqli = new mysqli("localhost", "root", null, "ChaoGuay");
echo '<tbody style="background-color:#EDB;">';
// 1. Change $query to get all fields
$query = "SELECT * FROM movie";

$result = $mysqli->query($query);

if ($result) {
    $row = $result->fetch_array();
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    </head>

<body class="bg-dark" style="font-family: Rationale; text-align:center; text-transform:uppercase;">
    <div class="py-5">
        <div class="container">
            <div class="row" style="text-align: left;">
                <div class="col-md-12"><a class="btn btn-primary" href="booking_home.html"
                        style="background-color:#161719; border:1px solid black; color:#161719;"><img
                            src="images/return.png" style="width:40px; height:40px;"></a></div>
            </div>
        </div>
    </div>
    <div class="py-5"  >
       
    <form class="well form-horizontal" method="post" action="signup.php"  id="contact_form">
    
        <div class="container">
        <!--Black Widow-->
            <h1 class="text-warning">Movies</h1>
            <div class="row">
                <div class="col-md-4" style="background-color:#EDB63C; border:1px solid black; color:#161719; position:relative; padding-top:11%;">
                    <img src="images/josee.jpg" style="width:200px; height:300px;">
                    <h3>Theatre 1 : 4DX</h3>
                    <p class="my-3">Josee, the Tiger and the Fish</p>
                    
                    
                </div>
                <div class="col-md-4" style="background-color:#EDB63C; border:1px solid black; color:#161719; position:relative; padding-top:11%;">
                    <img src="images/suicide.jpg" style="width:200px; height:300px;">
                    <h3>Theatre 2</h3>
                    <p class="my-3">Suicide Squad</p>
                    
                </div>
                <div class="col-md-4" style="background-color:#EDB63C; border:1px solid black; color:#161719; position:relative; padding-top:11%;">
                    <?php echo '<td "><a href="movie_delete.php?idmovie=' . $row['idmovie'] . '">';
                        echo '<img src="images/blackwidow.jpg" width="200" height="300"></td>'; ?>
                    <h3 class="text-dark">Theatre <?php echo "<td>" . $row["theatrenumber"] ."</td>"; ?> : <?php echo "<td>" . $row["theatretype"] ."</td>"; ?></h3>
                    <p class="my-3 text-dark"><?php echo "<td>" . $row["movie_name"] ."</td>"; ?></p>
                    
                </div>
            </div>
            
        </div>
        <!-- Button -->
        
        
        
    
    </form>
    </div>
    

</body>

</html>