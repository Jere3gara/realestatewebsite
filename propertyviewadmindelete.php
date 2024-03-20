<?php
include("connection.php");
$propertyid = $_GET['id'];


$sql = "SELECT * FROM properties where propertyid='$propertyid'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $img = $row["uimage"];
}
@unlink('user/' . $img);

//end view code
$msg = "";
$sql = "DELETE FROM properties WHERE propertyid = {$propertyid}";
$result = mysqli_query($conn, $sql);
if ($result == true) {
    $msg = "<p class='alert alert-success'>Property Deleted</p>";
    header("Location:propertyviewadmin.php?msg=$msg");
} else {
    $msg = "<p class='alert alert-warning'>Property not Deleted</p>";
    header("Location:propertyviewadmin.php?msg=$msg");
}

mysqli_close($conn);
?>