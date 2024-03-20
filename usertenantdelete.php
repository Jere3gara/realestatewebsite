<?php
include("connection.php");
$tenantid = $_GET['id'];

// view code//
$sql = "SELECT * FROM tenants where tenantid='$tenantid'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $img = $row["uimage"];
}
@unlink('user/' . $img);

//end view code
$msg = "";
$sql = "DELETE FROM tenants WHERE tenantid = {$tenantid}";
$result = mysqli_query($conn, $sql);
if ($result == true) {
    $msg = "<p class='alert alert-success'>Tenant Deleted</p>";
    header("Location:usertenant.php?msg=$msg");
} else {
    $msg = "<p class='alert alert-warning'>Tenant not Deleted</p>";
    header("Location:usertenant.php?msg=$msg");
}

mysqli_close($conn);
?>