<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../gcss.css">
<style type="text/css">
main{
	float:right;
}
</style>
</head>
<body>
<?php
include ('../connect.php');
 error_reporting(0);
$n1=$_GET['n1'];
?>
<a href="admin.php"><button>التقارير</button></a>
<h1>جميع المنتجات</h1>
<form action="all_book.php" method="get">
<input type="text" id="n1" name="n1" value="<?php echo $n1 ?>">
<input type="submit" value="البحث فى ">
</form>

<table id="customers">
  <tr>
    <th>م</th>
    <th>اسم المنتج</th>
    <th>نوع المنتج</th>
    <th>عدد القطع</th>
    <th>السعر</th>
    <th>ملاحظات</th>
    <th>صورة الغلاف</th>
    <th>حفظ</th>
  </tr>
  <?php

  $no=0;
  //رح الى قاعدة البيانات الى جدول بوكس واستعرض لي اسم الكتاب واسم المؤلف والى اخره//n1 عرفناها فوق وتعني ابحث لي بالاسم او الرقم وكذا
$sql="SELECT * FROM Products  WHERE Produced_name like '%$n1%' or Product_Type like '%$n1%' or isbn like '%$n1%' or author_name like '%$n1%' ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) { 
$no=$no+1;
?>
  <tr>
<form action="fun/update_book.php" method="post">
<input type="hidden" id="n1" name="id" value="<?php echo $row['id']; ?>">
<td><?php echo $no; ?></td>
<td><input type="text" id="n1" name="Produced_name" value="<?php echo $row['Produced_name']; ?>"></td>
<td><input type="text" id="n1" name="Product_Type" value="<?php echo $row['Product_Type']; ?>"></td>
<td><input type="text" id="n1" name="isbn" value="<?php echo $row['isbn']; ?>"></td>
<td><input type="text" id="n1" name="author_name" value="<?php echo $row['author_name']; ?>"></td>
<td><input type="text" id="n1" name="price" value="<?php echo $row['price']; ?>"></td>
<td><textarea style="width: 250px; height: 250px;"  name="note" id="note"><?php echo $row['note']; ?></textarea></td>
<td><img style="width: 250px; height: 250px;" src="Product_Picture/<?php echo $row['Product_Picture']; ?>"></td>
<td><input type="submit" value="حفظ التغيرات"></td>
      </form>
  </tr>
<?php
}
?>
</table>

</body>
</html>


