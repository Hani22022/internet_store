<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css1.css">
<style type="text/css">
main{
	float:right;
}
</style>
</head>
<body>
<?php
  include ('connect.php');
  include ('index.php');
if (!isset($_SESSION['internet_store'])) {
$username='زائر';
$situs='طالب';
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
<style type="text/css">
/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  /*background-color: #f2f2f2;*/
  padding: 20px;
}
</style>
<br><br><br><br>
<div class="container" id="contact-us" >
<a href="" >اتصل بنا</a>
<main>

<form action="admin/fun/add_contact_us.php" method="post">
<label for="fname">الاسم</label>
<input type="text" id="fname" name="firstname" placeholder="الاسم..">

<label for="lname">الايميل</label>
<input type="text" id="lname" name="lastname" placeholder="ايميل ..">



<label for="subject">الملاحظة</label>
<textarea id="subject" name="subject" placeholder="اكتب الملاحظات.." style="height:200px"></textarea>
<input type="submit" value="Submit">
  </form>
</div>
</main>
</body>
</html>
