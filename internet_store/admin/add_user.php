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
<center>
<h2>صفحة تسجيل الدخول</h2>
<?php
 error_reporting(0);
$re=$_GET['re'];
if ($re=='1') { // الشرح موجود في صفحة add_users
	echo "كلمتا السر غير متطابقتان";
}
if ($re=='2') {
	echo "اسم المستخدم مضاف سابقا";
}
if ($re=='3') {
	echo "تمت الاضافة بنجاح";
}
?>
<form action="fun/add_users.php" method="post" >
  <label for="username">اسم المستخدم</label><br>   <!-- ترميز يظهرداخل مسطيل اسم المستخدم كتابة اسم المستخدplaceholder-->
  <input type="text" id="username" name="username" placeholder="اسم المستخدم" ><br>
  <label for="pass">كلمة السر</label><br>
  <input type="password" id="pass" name="pass" placeholder="كلمة السر"><br>
  <label for="pass2">اعادة كلمة السر</label><br>
  <input type="password" id="pass2" name="pass2" placeholder="اعادة كلمة السر"><br>
  <label for="phon">رقم الهاتف</label><br>
  <input type="text" id="phon" name="phon" placeholder="رقم الهاتف"><br>
  <label for="adrees">العنوان</label><br>
  <input type="text" id="adrees" name="adrees" placeholder="العنوان"><br>
  <label for="email">البريد الالكترونى</label><br>
  <input type="text" id="email" name="email" placeholder="البريد الالكترونى"><br>
  <input style="text-align: center;" type="submit" value="دخول">

</form>

<p>مرحبا بكم فى موقع قطع الغيار الا كترونية</p>
<a href="login.php?re=0">لدى حساب</a>
</center>
</body>
</html>
