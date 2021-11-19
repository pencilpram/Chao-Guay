<?php
// Connect to the database
$mysqli = new mysqli("localhost", "root", null, "ChaoGuay");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rationale&display=swap" rel="stylesheet">
    
</head>

<body class="bg-dark" style="font-family: Rationale; text-align:center;">
    <div class="py-5">
        <div class="container" style="text-align:left; position:relative;">
            <div class="row" style="text-align: left; width:1290px; position:relative;">
                <div class="col-3"><a class="btn btn-primary" href="home.php"
                        style="background-color:#161719; border:1px solid black; color:#161719;"><img
                            src="images/return.png" style="width:40px; height:40px;"></a>
                </div>
                <div class="col-9" style="background-color:#EDB63C; text-align:center;">
                <h1>MOVIES</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="col-10" style="background-color:#EDB63C; text-align:center; position:relative">
            <table>
                <col width="15%">
                <col width="30%">
                <col width="30%">
                <col width="20%">
                <col width="5%">
                
                <tr>
                    <th>Movie ID</th> 
                    <th>Movie Name</th>
                    <th>Genre</th>
                    <th>Duration</th>
                    <th>Status</th>
                    <th>Admin Name</th>
                </tr>
                <?php
                
                // Exercise 2
                
                // 1. Change $query to get all fields
                $query = "SELECT m.idmovie,m.movie_name,m.genre,m.minutes,ms.status,a.adminfirstname FROM movie m,movieschedule ms,admin a";

                $result = $mysqli->query($query);

                if ($result){
                    while($row=$result->fetch_array()){
                    echo "<tr>";
                    echo "<td>" . $row["idmovie"] . "</td>";
                    echo "<td>".$row["movie_name"]."</td>"; //2. Change to get first_name with last_name
                    echo "<td>" . $row["genre"] . "</td>";
                    echo "<td>".$row["minutes"]."</td>"; //3. Change to get email
                    echo "<td>".$row["status"]."</td>"; //4. Change to get user group
                    echo "<td>" . $row["adminfirstname"] . "</td>";    
                
                    echo '<td><a href="movie_delete.php?idmovie='. $row['idmovie']. '">';
                    echo '<img src="images/delete.png" width="24" height="24"></td>';
                    echo "</tr>";
                }
                } else {
                echo "Error:" . $mysqli->error;
                }
                ?>  
            </table>
        </div>
    </div>
    

</body>
</html>