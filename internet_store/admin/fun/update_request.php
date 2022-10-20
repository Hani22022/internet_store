<?php
include ('../../connect.php');
$id=$_POST['id'];
$notes=$_POST['notes'];
$customer_case=$_POST['customer_case']; 
	$sql = "UPDATE  Buy SET notes='$notes' ,customer_case='$customer_case'  where id = '$id' ";//الان اي ملاحظة تغير في الحالة ينحفظ في قاعدة البيانات
$result = $conn->query($sql);
header('Location:http://localhost//internet_store/admin/request.php?n1=');
?>