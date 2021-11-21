<?php
$mysqli = new mysqli("localhost", "root", null, "ChaoGuay");
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

    <div class="py-5">
        <div class="container">
            <div class="row" style="text-align: left;">
                <div class="col-md-12"><a class="btn btn-primary" href="beveragemenu.html" style="background-color:#161719; border:1px solid black; color:#161719;"><img src="images/return.png" style="width:40px; height:40px;"></a></div>
            </div>
        </div>
    </div>
</head>

<body class="bg-dark" style="font-family: Rationale; text-align:center;text-transform:uppercase;">

    <div class="row">
        <div class="col-4">
            <img src="images/soft-drink.png" alt="drinks" style="position: absolute;width: 100px;height: 100px;">
        </div>
        <div class="col-4">
            <img src="images/popcorn.png" alt="popcorn" style="position: absolute;width: 100px;height: 100px;">
        </div>
        <div class="col-4">
            <img src="images/snack.png" alt="snacks" style="position: absolute;width: 100px;height: 100px;">
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div style="position: absolute;width: 1250px;height: 350px;left: 133px;top: 205px;background: #EDB63C;">
                <div class="row justify-content-center mt-3" style="max-width:100%">
                    <table class="col-10 table table-striped table-hover" style="width:100%">
                        <thead class="table" style="background-color: #EDB63C; color:#161719">
                            <tr>
                                <th scope="col">Beverages</th>
                                <th scope="col">Prices</th>
                                <th scope="col">Types</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <?php
                        echo '<tbody style="background-color:#EDB;">';
                        // 1. Change $query to get all fields
                        $drink_query = "SELECT * FROM beverage";
                        $result1 = $mysqli->query($drink_query);
                        if ($result1) {
                            while ($row = $result1->fetch_array()) {
                                echo "<tr>";
                                echo "<td class='col-3'>" . $row["foodname"] . "</td>";
                                echo "<td class='col-3'>" . $row["prices"] . "</td>";
                                echo "<td class='col-3'>" . $row["beveragetypes"] . "</td>";
                                if ($row['snackstatus'] == 1){
                                    echo "<td class='col-3'>ACTIVE</td>";
                                }else{
                                    echo "<td class='col-3'>INACTIVE</td>";
                                }
                                echo '<td class="col-1"><a href="movie_delete.php?idmovie=' . $row['idmovie'] . '">';
                                echo '<img src="images/delete.png" width="24" height="24"></td>';
                                echo "</tr>";
                            }
                        } else {
                            echo "Error:" . $mysqli->error;
                        }
                        echo '</tbody>';
                        ?>
                </div>
            </div>

        </div>
    </div>

</body>

</html>