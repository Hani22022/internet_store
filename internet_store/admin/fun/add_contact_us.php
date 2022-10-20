<?php
include ('../../connect.php'); //ارجع لي خطوتين الى صفحة connect.php
$firstname=$_POST['firstname'];//
$lastname=$_POST['lastname'];//
$country=$_POST['country'];//
$subject=$_POST['subject'];//
//
$sql="INSERT INTO contact_us (firstname , lastname , country ,subject) 
VALUES('$firstname','$lastname','$country','$subject')";
$result = $conn->query($sql);
header('Location:http://localhost/internet_store/contact-us.php');
?>