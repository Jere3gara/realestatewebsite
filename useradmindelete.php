<?php
include("connection.php");
$adminid = $_GET['id'];


$sql = "SELECT * FROM admins where adminid='$adminid'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	$img = $row["uimage"];
}
@unlink('user/' . $img);

//end view code
$msg = "";
$sql = "DELETE FROM admins WHERE adminid = {$adminid}";
$result = mysqli_query($conn, $sql);
if ($result == true) {
	$msg = "<p class='alert alert-success'>Admin Deleted</p>";
	header("Location:useradmin.php?msg=$msg");
} else {
	$msg = "<p class='alert alert-warning'>Admin not Deleted</p>";
	header("Location:useradmin.php?msg=$msg");
}

mysqli_close($conn);
?>