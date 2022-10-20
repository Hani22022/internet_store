<!DOCTYPE html>
<html>
<head>
  <font align="center"><h1>  </h1>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="gcss.css">
<style type="text/css">

</style>
</head>
<body>
<?php
  include ('connect.php');
session_start();
if (!isset($_SESSION['internet_store'])) {
$username='زائر';
$situs='عميل';
}
if (isset($_SESSION['internet_store'])) {
$username= $_SESSION['internet_store'];
$sql="SELECT * FROM users where  username= '$username'  ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
  $situs=$row['situs'];
}
}
?>
<div class="navbar">
<table  width="200">
<tr>
<td class="n">
  <a href="electronic.php"><i class="glyphicon glyphicon-th-large"></i>
      <span>المنتجات</span></a>
   </tr>
</td>
<tr>
<td class="n">
  <a href="electronic.php"><i class="glyphicon glyphicon-th-large"></i>
      <span>تفاصيل فنية</span></a>
   </tr>
</td>
<tr>
<td class="c">
  <a href="wook_group.php">فريق العمل</a>
  </tr>
</td>
<tr>
<td class="h">
  <a href="contact-us.php">اتصل بنا</a>
  </tr>
</td>
<tr>
<td>

  <a  class="sidebar"> <span>موقع بيع وتعلم</span></a>
  </td>
</tr>

  </table>
  </div>
<div style="float:right">
<label></label>
</button><img class="t" src="img/user.png">
<div class="dropdown">
<button class="dropbtn">انضم 
<i class="fa fa-caret-down"></i>
<div class="dropdown-content">
<?php if ($username=='زائر') { ?>
<a href="admin/add_user.php">مستخدم جديد</a>
<a href="admin/login.php">دخول</a>
<?php } ?>
<a href="#">
<?php
if ($username=='زائر') {
 echo "زائر";
}
if ($username!=='زائر') {
echo "مرحبا بك  - ".$username;
}
?>
</a>
<?php if ($username!=='زائر') { ?>
<a href="admin/login.php">تسجيل خروج</a>
<?php } ?>
<?php if ($situs=='الادارة') { ?>
<a href="admin/admin.php">التقارير</a>
<?php } ?>

</div>
</div> 
</div>
</div>
</body>
</html>
