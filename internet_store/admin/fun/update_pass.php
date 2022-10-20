<?php 
include ('../../connect.php');
$user_name=$_POST['user_name'];
                       //   pass3 pass2
$pass=$_POST['pass']; // الباس القديم
                        //pass2
$pass2=$_POST['pass2'];// الباس الجديد
                       //  pass3
$pass3=$_POST['pass3'];//باس ثلاثه لتاكد من صحة الادخال

if ($pass3!==$pass2) {// اذا باس ثلاثه لا يساوي باس 2 شغل الهيدر واطبع لي كلمات المرور غير متطابقتان
	header('Location:http://localhost/internet_store/admin/update_pass.php?re=1');// ذا نفسه في صفحة ادد يوزر بس غيرنا اسم الصفحة والاسم في الشرط
	exit();
} //استعرض لي اليوزر نيم والباسوورد
$sql="SELECT * FROM users  WHERE username = '$user_name' and pass='$pass' ";
$result = $conn->query($sql);//تشغيل جملة الاستعلام
$count= $result->num_rows;//تشغيل جملة الاستعلام
			if ($count==1) {
//                        حقلل باس يساوي بس 3 يعنيي ياخذكلمة المرورالجديده		
$sql = "UPDATE  users SET pass='$pass2'   where username = '$user_name' ";// غير كلمة المرور وقم باضافتها الى قاعدة البيانات اذا كان يوزر يساوي يوزر نيم
$result = $conn->query($sql);//تشغيل جملة الاستعلام
				header('Location:http://localhost/internet_store/admin/update_pass.php?re=2');
}
else{ // غير ذالك ارجع لي الى الصفحة الرىيسية
				header('Location:http://localhost/internet_store');
}

 ?>