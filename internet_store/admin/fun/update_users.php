<?php
include ('../../connect.php');
$id=$_POST['id'];
$username=$_POST['username'];
$phon=$_POST['phon'];
$adrees=$_POST['adrees'];
$email=$_POST['email'];
$situs=$_POST['situs'];
$time_update=(new \DateTime())->format('Y-m-d H:i:s');
	$sql = "UPDATE  users SET username='$username' ,phon='$phon',adrees='$adrees',email='$email' ,situs='$situs' ,time_update='$time_update'  where id = '$id' ";
$result = $conn->query($sql);
header('Location:http://localhost//internet_store/admin/all_user.php?n1=');
?>