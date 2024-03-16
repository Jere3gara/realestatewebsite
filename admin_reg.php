<?php
require_once("connection.php");

function alert_box()
{
    echo "<script> alert('Admin Registered') </script>";
}
//get the post records
$adminid = $_POST["adminid"];
$username = $_POST["txtusername"];
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
$fname = $_POST["txtfname"];
$lname = $_POST["txtlname"];
$DOB = $_POST["DOB"];
$gender = $_POST["gender"];
$email = $_POST["txtEmail"];
$phone = $_POST["txtPhone"];


// database insert SQL code
if ($pass1 == $pass2) {
    $sql = "INSERT INTO admins (`username`, `pass1`, `fname` ,`lname`, `DOB`, `gender`, `email`, `phone`) VALUES ( '$username','$pass1', '$fname', '$lname' , '$DOB', '$gender', '$email', '$phone')";

    // insert in database 
    if ($conn->query($sql) === TRUE) {
        alert_box();
        echo "Registered successfully!! <br><br>";
    } else {
        echo "Registration unsuccessful";
    }
} else {
    echo "Password did not match";
}
?>

<!DOCTYPE html>
<html>
<a href="admin_login.php"><button>Login</button></a>

</html>