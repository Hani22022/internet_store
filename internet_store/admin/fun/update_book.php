<?php
include ('../../connect.php');
$id=$_POST['id'];
$Produced_name=$_POST['Produced_name'];
$Product_Type=$_POST['Product_Type']; 
$isbn=$_POST['isbn'];
$Product_Type=$_POST['Product_Type'];
 //اضف لي اسمالكتاب والمولف والحالة وعدد النستخ
$sql = "UPDATE  products SET Produced_name='$Produced_name' ,Product_Type='$Product_Type',isbn='$isbn',Product_Type='$Product_Type'   where id = '$id' ";
$result = $conn->query($sql);
header('Location:http://localhost//internet_store/admin/all_products.php?re=1');
?>