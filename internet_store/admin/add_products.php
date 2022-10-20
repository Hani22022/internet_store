<!DOCTYPE html> 
<html>
<head>
<a href="http://localhost/internet_store/"><button>رجوع</button></a>
<link rel="stylesheet" type="text/css" href="../gcss.css">
<style type="text/css">
main{
	float:right;
}
</style>
</head>
<body>
<center>
<h2>صفحة اضافة المنتجات</h2>  <!-- الشرح موجود في صفحة  add_user -->
<?php

error_reporting(0);
$re=$_GET['re'];
if ($re=='1') {
	echo "كلمتا السر غير متطابقتان";
}
if ($re=='2') {
	echo "اسم المستخدم مضاف سابقا"; 
}
if ($re=='3') {
	echo "تمت الاضافة بنجاح";
}
?>
<a href="admin.php"><button>التقارير</button></a>       <!--file-->
                                             <!-- الكود اللي تحت ذا ضروري عشات تشتفل فاي لي معنا-->
<form action="fun/add_book.php" method="post" enctype="multipart/form-data" >
  <label for="Produced_name">اسم المنتج</label><br>
  <input type="text" id="Produced_name" name="Produced_name" placeholder="اسم المنتج" ><br>
  <label for="isbn">نوع المنتج </label><br>
  <input type="text" id="isbn" name="isbn" placeholder="نوع المنتج"><br>
  <label for="author_name">عدد القطع</label><br>
  <input type="number" id="author_name" name="author_name" placeholder="عدد القطع"><br>
  <label for="Product_Picture">صورة للمنتج</label><br>
  <input type="file" id="Product_Picture" name="Product_Picture" placeholder="صورة الغلاف"><br> <!-- file تنبيه فاي لي لاضافة غلاف للكتاب -->
  <!--<label for="Product_Picture">السعر</label><br>
  <input type="" id="price" name="price" placeholder="السعر"><br>-->
    <label for="note">وصف للمنتج </label><br>
  <textarea name="note" id="note"></textarea><br>
  <input style="text-align: center;" type="submit" value="دخول">

</form>

<p>مرحبا بكم فى موقع قطع الغيار الا كترونية</p>
</center>
</body>
</html>
