<?php
// ini_set('session.cache_limiter', 'public');
// session_cache_limiter(false);
session_start();
include("connection.php");
// if (!isset($_SESSION['username'])) {
//     header("location:agent_login.php");
// }

//// code insert
//// add code
$error = "";
$msg = "";
if (isset($_POST['add'])) {

    // Basic information
    $propertytitle = $_POST['propertytitle'];
    $propertycontent = $_POST['propertycontent'];
    $propertytype = $_POST['propertytype'];
    $statetype = $_POST['statetype'];
    $bathroom = $_POST['bathroom'];
    $kitchen = $_POST['kitchen'];
    $bhk = $_POST['bhk'];
    $bedroom = $_POST['bedroom'];
    $balcony = $_POST['balcony'];
    $hall = $_POST['hall'];

    // Price and location

    $floor = $_POST['floor'];
    $price = $_POST['price'];
    $city = $_POST['city'];
    $county = $_POST['county'];
    $totalfloor = $_POST['totalfl'];
    $sizesqft = $_POST['sizesqft'];





    $loc = $_POST['loc'];

    $availability = $_POST['availability'];





    $isFeatured = $_POST['isFeatured'];

    // Images and Status


    $pimage = $_FILES['pimage']['name'];
    $pimage1 = $_FILES['pimage1']['name'];
    $pimage2 = $_FILES['pimage2']['name'];
    $pimage3 = $_FILES['pimage3']['name'];
    $pimage4 = $_FILES['pimage4']['name'];

    $fimage = $_FILES['fimage']['name'];
    $fimage1 = $_FILES['fimage1']['name'];
    $fimage2 = $_FILES['fimage2']['name'];

    $temp_name = $_FILES['pimage']['tmp_name'];
    $temp_name1 = $_FILES['pimage1']['tmp_name'];
    $temp_name2 = $_FILES['pimage2']['tmp_name'];
    $temp_name3 = $_FILES['pimage3']['tmp_name'];
    $temp_name4 = $_FILES['pimage4']['tmp_name'];

    $temp_name5 = $_FILES['fimage']['tmp_name'];
    $temp_name6 = $_FILES['fimage1']['tmp_name'];
    $temp_name7 = $_FILES['fimage2']['tmp_name'];

    move_uploaded_file($temp_name, "propertyimages/$pimage");
    move_uploaded_file($temp_name1, "propertyimages/$pimage1");
    move_uploaded_file($temp_name2, "propertyimages/$pimage2");
    move_uploaded_file($temp_name3, "propertyimages/$pimage3");
    move_uploaded_file($temp_name4, "propertyimages/$pimage4");

    move_uploaded_file($temp_name5, "propertyimages/$fimage");
    move_uploaded_file($temp_name6, "propertyimages/$fimage1");
    move_uploaded_file($temp_name7, "propertyimages/$fimage2");

    $sql = "insert into properties (propertytitle,propertycontent,propertytype,bhk,statetype,bedroom,bathroom,balcony,kitchen,hall,floor,sizesqft,price,location,city,county,pimage,pimage1,pimage2,pimage3,pimage4,availability,mapimage,topmapimage,groundmapimage,totalfloor, isFeatured)
	values('$propertytitle','$propertycontent','$propertytype','$bhk','$statetype','$bedroom','$bathroom','$balcony','$kitchen','$hall','$floor','$sizesqft','$price',
	'$loc','$city','$county','$pimage','$pimage1','$pimage2','$pimage3','$pimage4','$availability','$fimage','$fimage1','$fimage2','$totalfloor', '$isFeatured')";

    // insert in database 
    if ($conn->query($sql) === TRUE) {
        //  alert_box();
        echo "Property inserted Successfully!! <br><br>";
    } else {
        echo "Property listed Unsuccessfully";
    }
} else {
    echo "Password did not match";
}
?>