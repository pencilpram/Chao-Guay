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
    <div class="py-5" style="height: 100px;">
        <div class="container">
            <div class="row" style="text-align: left;">
                <div class="col-md-1"><a class="btn btn-primary" href="movies.html"
                        style="background-color:#161719; border:1px solid black; color:#161719;"><img src="images/return.png"
                            style="width:40px; height:40px;"></a></div>
            </div>     
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row" style="text-align: center;">
                <div class="col-md-12">
                    <form id="c_form-h" method="POST" action="insert.php" enctype="multipart/form-data" style="font-size: 25px; text-align:center;">
                        <div class="form-group row"> 
                            <label class="col-2 col-form-label" style="color: #685F5F;">MOVIE NAME</label>
                            <div class="col-3">
                                <input type="text" class="form-control" name="moviename" style="background-color:#161719; color:#EDB63C; font-size:25px;">
                            </div>
                            <label class="col-2 col-form-label" style="color: #685F5F;">THEATRE NUMBER</label>
                            <div class="col-3">
                                <select class="form-control" style="background-color:#161719; color:#EDB63C; font-size:25px;" name="theatrenumber">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-2 col-form-label" style="color: #685F5F;">GENRE</label>
                            <div class="col-3">
                                <input type="text" class="form-control" name="genre" style="background-color:#161719; color:#EDB63C; font-size:25px;">
                            </div>
                            <label class="col-2 col-form-label" style="color: #685F5F">THEATRE TYPES</label>
                            <div class="col-3">
                                <select class="form-control" style="background-color:#161719; color:#EDB63C; font-size:25px;" name="theatretypes">
                                    <option>2D</option>
                                    <option>3D</option>
                                    <option>4DX</option>
                                </select>
                            </div>  
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label" style="color: #685F5F;">MINUTES</label>
                            <div class="col-3">
                                <input type="text" class="form-control" name="minutes" style="background-color:#161719; color:#EDB63C; font-size:25px;">
                            </div>
                            <label class="col-2 col-form-label" style="color: #685F5F;">SELECT TIMES</label>
                            <div class="col-3">
                                <select class="form-control" style="background-color:#161719; color:#EDB63C; font-size:25px;" name="times">
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
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label" style="color: #685F5F;">STATUS</label>
                            <div class="col-3">
                                <select class="form-control" style="background-color:#161719; color:#EDB63C; font-size:25px;" name="status">
                                    <option>ACTIVE</option>
                                    <option>INACTIVE</option>
                                </select>
                            </div>
                            <label class="col-2 col-form-label" style="color: #685F5F;">IMAGES</label>
                            <div class="col-3" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input class="form-control" type="file" name="movieimage" style="background-color: #161719; color:#EDB63C; font-size:22px;">
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
    <?php
    session_start();
    $mysqli = new mysqli("localhost", "root", null, "ChaoGuay");
    if (isset($_POST['add'])) {
        $moviename = $_POST['moviename'];
        $moviename_escape = mysqli_real_escape_string($mysqli, $moviename);
        $genre = $_POST['genre'];
        $genre_escape = mysqli_real_escape_string($mysqli, $genre);
        $minutes = $_POST['minutes'];
        $status = $_POST['status'];
        $theatrenumber = $_POST['theatrenumber'];
        $theatretypes = $_POST['theatretypes'];
        $times = $_POST['times'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["movieimage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $idadmin = $_SESSION['idadmin'];
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["movieimage"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["movieimage"]["tmp_name"], $target_file)) {
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $query1 = "INSERT INTO movie (movie_name,genre,minutes,linkimage) VALUES ('$moviename_escape','$genre_escape','$minutes','$target_file')";
        $result1 = $mysqli->query($query1);
        if ($result1) {
        } else {
            echo $mysqli->error;
        }
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>