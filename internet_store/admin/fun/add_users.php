<?php
include ('../../connect.php'); //ارجع خطوتين واتصل بقاعدةالبيانات
$username=$_POST['username']; //استملت المتغير يوزر نيم من صفحة add_user   خطوه 1 
$pass=$_POST['pass']; // نفس الشي استقبلناها من صفحة يوزر ونفس الشي مع باقي المتغيرات
$pass2=$_POST['pass2'];
if ($pass!==$pass2) { /* اذا المتغير باس لا يساوي باس2 شغل لي الهيدر*/                                            //re         //'pass2              //pass
	header('Location:http://localhost/internet_store/admin/add_user.php?re=1'); // اذا باس لا يساوي باس 2 اطبع لي ري ويقول كلماتا السر غير متطابقتين
	exit();
}
$phon=$_POST['phon'];//نفس خطوه 1
$adrees=$_POST['adrees'];//نفس خطوه 1
$email=$_POST['email'];//نفس خطوه 1
$situs='طالب'; // اي احد يسجل هو طالب الى ان تحوله الادارة الى مدير
$time_add=(new \DateTime())->format('Y-m-d H:i:s'); //متغير ثابت لاضافة الوقت
$sql1="SELECT * FROM users  WHERE username = '$username' "; // اظهر لي كم يوزر في القاعدة نفس اليوزر الجديد
$result1 = $conn->query($sql1);
$count= $result1->num_rows;                          //re2    add_user                 header
if ($count==1) { // اذا لقيت اسم مستخدم في قاعدة البيانات نفس الاسم شغل الهيدر وارجع الى صفحة ادد يوزر ونفذ ري2 واطبع لي اسم المستخدم مضاف سابقا
	header('Location:http://localhost/internet_store/admin/add_user.php?re=2');
	exit();
} // استلام المتغيرات اللي فوق واضافتها
$sql="INSERT INTO users (username , pass , phon ,adrees,email,time_add ,situs) 
VALUES('$username','$pass','$phon','$adrees','$email','$time_add' , '$situs')";
$result = $conn->query($sql); //                                               re3                            re2   r1
header('Location:http://localhost/internet_store/admin/add_user.php?re=3'); // اذا لم يتحقق ري1 ري 2 يعني التسجيل صحيح ويطبع لي ري3 
?>