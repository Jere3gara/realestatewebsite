<?php
include("connection.php");


//get the post records
$username = $_POST["txtusername"];
$gender = $_POST["gender"];
$email = $_POST["txtEmail"];
$phone = $_POST["txtPhone"];
$DOB = $_POST["DOB"];
$fname = $_POST["txtfname"];
$lname = $_POST["txtlname"];
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
$utype = $_REQUEST['utype'];
$uimage = $_POST['uimage'];

$sql = "INSERT INTO users (username,gender,email,phone,DOB,fname,lname,pass1,utype,uimage) VALUES ('$username','$gender','$email','$phone','$DOB','$fname','$lname','$pass1','$utype','$uimage')";



// database insert SQL code
if ($pass1 == $pass2) {

    if ($utype == "tenant")

        $sql = "INSERT INTO Tenants (username,gender,email,phone,DOB,fname,lname,pass1,utype,uimage) VALUES ('$username','$gender','$email','$phone','$DOB','$fname','$lname','$pass1','$utype','$uimage')";
    else {

        $sql = "INSERT INTO Agents (username,gender,email,phone,DOB,fname,lname,pass1,utype,uimage) VALUES ('$username','$gender','$email','$phone','$DOB','$fname','$lname','$pass1','$utype','$uimage')";

    }


    // insert in database 
    if ($conn->query($sql) === TRUE) {
        
        echo "User Registered successfully!!";
    } else {
        echo "Registration unsuccessful";
    }

} else {
    echo "Password did not match";
}


?>