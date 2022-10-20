<?php 
include ('../../connect.php');
$user_name=$_POST['user_name'];
$pass=$_POST['pass'];
$sql="SELECT * FROM users  WHERE username = '$user_name' and pass='$pass' ";
$result = $conn->query($sql);
$count= $result->num_rows;
while($row = $result->fetch_assoc()) {
}
			if ($count==1) {
				session_start();
			     $_SESSION['internet_store'] = $user_name ;
				header('Location:http://localhost/internet_store');
			}
			else{
				header('Location:http://localhost/internet_store/admin/login.php?re=2');
			}

 ?>