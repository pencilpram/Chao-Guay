<?php
session_start();
$mysqli = new mysqli("localhost", "root", null, "ChaoGuay");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$checkpassword = $_POST['password'];
$curpass = $_POST['currentpass'];
$newpass = $_POST['newpass'];
$idadmin = $_SESSION['idadmin'];

//get the account information
$select_admin = "SELECT * FROM admin WHERE idadmin = '$idadmin'";
$select_admin_result = $mysqli->query($select_admin);
$result1 = $select_admin_result->fetch_array();

if (isset($_POST['update1'])) { //check that button update1 was clicked
    if ($checkpassword == $result1['adminpassword']) { //check that password is match
        $query2 = "UPDATE admin SET adminfirstname = '$firstname', adminlastname = '$lastname' WHERE idadmin = '$idadmin'";
        $result2 = $mysqli->query($query2);
        header("Location: setting.php");
    } else {
        echo "PASSWORD IS NOT MATCH"; //if password is not match then echo
    }
} else { //if button update2 was clicked
    if ($curpass == $result1['adminpassword']) {
        $query3 = "UPDATE admin SET adminpassword = '$newpass' WHERE idadmin = '$idadmin'";
        $result3 = $mysqli->query($query3);
        header("Location: setting.php");
    } else {
        echo "PASSWORD IS NOT MATCH";
    }
}
