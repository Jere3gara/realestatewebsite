<?php
include("connection.php");
$agentid = $_GET['id'];

// view code//
$sql = "SELECT * FROM agents where agentid='$agentid'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
	{
	  $img=$row["uimage"];
	}
@unlink('user/'.$img);

//end view code
$msg="";
$sql = "DELETE FROM agents WHERE agentid = {$agentid}";
$result = mysqli_query($conn, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Agent Deleted</p>";
	header("Location:useragent.php?msg=$msg");
}
else
{
	$msg="<p class='alert alert-warning'>Agent not Deleted</p>";
		header("Location:useragent.php?msg=$msg");
}

mysqli_close($conn);
?>
