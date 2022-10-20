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
// اكواد تسجيل الخروج   
session_start();
session_unset();

$re=$_GET['re'];

if ($re=='2') {
	echo "معلومات الدخول خطأ";
}
?>
<form action="fun/testlogin.php" method="post" >
  <label for="fname">اسم المستخدم</label><br>
  <input type="text" id="fname" name="user_name" placeholder="اسم المستخدم" ><br>
  <label for="lname">كلمة السر</label><br>
  <input type="password" id="lname" name="pass" placeholder="كلمة السر"><br>
  <input style="text-align: center;" type="submit" value="دخول">

</form>

<p>مرحبا بكم فى موقع قطع الغيار الا كترونية</p>

<a href="add_user.php?re=0"><p>ليس لدى حساب</p></a>

</center>
</body>
</html>
