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
<?php

  include ('../connect.php');
  error_reporting(0); //كوداخفاء الخطاء
$n1=$_GET['n1']; 


?>
<a href="admin.php"><button>التقارير</button></a>
<h1>جميع المستخدمين</h1>
<form action="all_user.php" method="get">
<input type="text" id="n1" name="n1" value="<?php echo $n1 ?>">
<input type="submit" value="البحث فى المستخدمين">
</form>

<table id="customers">
<tr>
<th>م</th>
<th>اسم المستخدم</th>
<th>الهاتف</th>
<th>العنوان</th>
<th>الاميل</th>
<th>الحالة</th>
<th>حفظ</th>
<th>الاضافة</th>
<th>اخر تحديث</th>

  </tr>
  <?php
  $no=0;
$sql="SELECT * FROM users  WHERE username like '%$n1%' or phon like '%$n1%' or adrees like '%$n1%' or email like '%$n1%'or situs like '%$n1%'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
$no=$no+1;
?>
<tr>
<form action="fun/update_users.php" method="post">
<input type="hidden" id="n1" name="id" value="<?php echo $row['id']; ?>">
<td><?php echo $no; ?></td>
<td><input type="text" id="n1" name="username" value="<?php echo $row['username']; ?>"></td>
<td><input type="text" id="n1" name="phon" value="<?php echo $row['phon']; ?>"></td>
<td><input type="text" id="n1" name="adrees" value="<?php echo $row['adrees']; ?>"></td>
<td><input type="text" id="n1" name="email" value="<?php echo $row['email']; ?>"></td>
<td>
<select name="situs">
<option value="<?php echo $row['situs']; ?>"><?php echo $row['situs']; ?></option> 
<option value="عميل">عميل</option>
<option value="الادارة">الادارة</option>

</select>
<td><input type="submit" value="حفظ التغيرات"></td>
<td><?php echo $row['time_add']; ?></td>
<td><?php echo $row['time_update']; ?></td>
</form>
  </tr>
<?php
}
?>
</table>

</body>
</html>


