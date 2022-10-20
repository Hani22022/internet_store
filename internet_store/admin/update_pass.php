<!DOCTYPE html>
<html>
<head>
<a href="http://localhost/Produced_name/"><button>رجوع</button></a>
<link rel="stylesheet" type="text/css" href="../gcss.css">
<style type="text/css">
main{
	float:right;
}
</style>
</head>
<body>
<center>
<h2>صفحة تسجيل الدخول</h2>
<?php
error_reporting(0);
$re=$_GET['re'];
if ($re=='1') {
	echo "كلمتى السر الجديدة غير متطابقة";
}
if ($re=='2') {
	echo "تم تغير كلمة السر";
}
?>
<a href="admin.php"><button>التقارير</button></a>

<form action="fun/update_pass.php" method="post" >
  <label for="fname">اسم المستخدم</label><br> <!-- استخدمنا فور لربط مع الايدي مثلا فور اف نيم مع السطر الثاني ايدي اف نيم-->
  <input type="text" id="fname" name="user_name" placeholder="اسم المستخدم" ><br>
  <label for="lname">كلمة السر القديمة</label><br>
  <input type="password" id="lname" name="pass" placeholder="كلمة السر القديمة"><br>
  <label for="lname">كلمة السر الجديدة</label><br>
  <input type="password" id="lname" name="pass2" placeholder="كلمة السر الجديدة"><br>
    <label for="lname">اعادة كلمة السر الجديدة</label><br>
  <input type="password" id="lname" name="pass3" placeholder="اعادة كلمة السر الجديدة"><br>
  <input style="text-align: center;" type="submit" value="دخول">

</form>

<p>مرحبا بكم فى موقع قطع الغيار الا كترونية</p>
</center>
</body>
</html>
