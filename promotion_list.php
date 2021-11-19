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
                <h1>PROMOTIONS</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="col-5" style="background-color:#EDB63C; text-align:center; position:relative">
            <table>
                <col width="25%">
                <col width="25%">
                <col width="25%">
                <col width="25%">
                
                <tr>
                    <th>Promotion ID</th> 
                    <th>Promotion Name</th>
                    <th>Detail</th>
                    <th>Admin Name</th>
                </tr>
                <?php
                
                // Exercise 2
                
                // 1. Change $query to get all fields
                $query = "SELECT p.idpromotion,p.promotionname,p.detail,a.adminfirstname FROM promotion p,admin a";

                $result = $mysqli->query($query);

                if ($result){
                    while($row=$result->fetch_array()){
                    echo "<tr>";
                    echo "<td>" . $row["idpromotion"] . "</td>";
                    echo "<td>".$row["promotionname"]."</td>"; //2. Change to get first_name with last_name
                    echo "<td>" . $row["detail"] . "</td>";
                    echo "<td>" . $row["adminfirstname"] . "</td>";    
                
        
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