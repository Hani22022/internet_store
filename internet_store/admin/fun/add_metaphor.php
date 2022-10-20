<?php
include ('../../connect.php'); //صفحة نتصل فيها من صفحة 
$user_name=$_POST['user_name']; //استلمناهم من صفحة بوك
$number_of_products=$_POST['number_of_products'];//استلمناهم من صفحة بوك
$customer_time=(new \DateTime())->format('Y-m-d');// تاريخ الطلب
$customer_case='طلب';
//     جدول الاستعارة اضف   الى  
$sql="INSERT INTO Buy (user_name , number_of_products , customer_time ,customer_case ) 
VALUES('$user_name','$number_of_products','$customer_time','$customer_case')";
$result = $conn->query($sql);
header('Location:http://localhost/internet_store/book.php?re=1');
?>