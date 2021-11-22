<?php
// Connect to the database
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

</head>

<body class="bg-dark" style="font-family: Rationale; text-align:center;text-transform:uppercase;">
    <div class="py-5">
        <div class="container" style="text-align:left; position:relative;">
            <div class="row" style="text-align: left; width:1290px; position:relative;">
                <div class="col-3"><a class="btn btn-primary" href="booking_home.html" style="background-color:#161719; border:1px solid black; color:#161719;"><img src="images/return.png" style="width:40px; height:40px;"></a>
                </div>
                <div class="col-9" style="background-color:#EDB63C; text-align:center;margin-top:-6%;">
                    <span style="font-size:40px;top:30%;position:relative;">Tickets</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3" style="max-width:100%">
        <table class="col-10 table table-striped table-hover" style="width:100%">
            <thead class="table" style="background-color: #EDB63C; color:#161719">
                <tr>
                    <th scope="col">Ticket ID</th>
                    <th scope="col">Movie Name</th>
                    <th scope="col">Row</th>
                    <th scope="col">Seat No.</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Theatre No.</th>
                    <th scope="col">Admin Name</th>
                </tr>
            </thead>
            <?php
            echo '<tbody style="background-color:#EDB;">';
            // 1. Change $query to get all fields
            $query = "SELECT b.idticket,b.movie_name,b.row,b.seat_no,b.date,b.time,b.theatre_no,a.adminfirstname FROM bookingticket b,admin a WHERE a.idadmin=b.idadmin";

            $result = $mysqli->query($query);

            if ($result) {
                while ($row = $result->fetch_array()) {
                    echo "<tr>";
                    echo "<td class='col-1'>" . $row["idticket"] . "</td>";
                    echo "<td class='col-3'>" . $row["movie_name"] . "</td>"; //2. Change to get first_name with last_name
                    echo "<td class='col-2'>" . $row["row"] . "</td>";
                    echo "<td class='col-1'>" . $row["seat_no"] . "</td>"; //3. Change to get email
                    echo "<td class='col-1'>" . $row["date"] . "</td>";
                    echo "<td class='col-1'>" . $row["time"] . "</td>";
                    echo "<td class='col-1'>" . $row["theatre_no"] . "</td>";
                    echo "<td class='col-1'>" . $row["adminfirstname"] . "</td>";
                    

                    echo '<td class="col-1"><a href="ticketedit.php?idticket=' . $row['idticket'] . '">';
                    echo '<img src="images/Modify.png" width="24" height="24"></td>';
                    echo "</tr>";
                }
            } else {
                echo "Error:" . $mysqli->error;
            }
            echo '</tbody>';
            ?>
        </table>
    </div>


</body>

</html>