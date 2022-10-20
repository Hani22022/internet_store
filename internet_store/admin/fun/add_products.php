<?php
include ('../../connect.php');
$Produced_name=$_POST['Produced_name'];
$Product_Type=$_POST['Product_Type'];
$isbn=$_POST['isbn'];
$author_name=$_POST['author_name'];
$price=$_POST['price'];                      //add_bokk                       //file       //Product_Picture
$Product_Picture=$_FILES['Product_Picture']['name']; // نستقبل كفر فوتو من فلاي من صفحة اضافة الكتب صفحة اددبوك 
$Product_Picture=date("mdYHis").'.'.pathinfo($Product_Picture, PATHINFO_EXTENSION); // حطينا بصيغة وقت عشان تنحفظ الصورة ب اسم رقمي
$filetmb=$_FILES['Product_Picture']['tmp_name'];
$upload_file='../Product_Picture/';
move_uploaded_file($filetmb, $upload_file.$Product_Picture);
$note=$_POST['note'];
$sql="INSERT INTO products (Produced_name , Product_Type , isbn ,author_name ,Product_Picture ,price , note) 
VALUES('$Produced_name','$Product_Type','$isbn','$author_name','$Product_Picture' , '$price', '$note')";
$result = $conn->query($sql);
header('Location:http://localhost/internet_store/admin/add_book.php?re=3');
?>