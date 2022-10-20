<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
}
if (isset($_SESSION['internet_store'])) {
$username= $_SESSION['internet_store'];
}
?>
<center>
  <label>مرحبا بك   <?php echo $username; ?></label>
<br>
         
<br>
<?php
$id=$_GET['id'];
$sql="SELECT * FROM Products  where id='$id'   ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>

<div class="card" style="width: 600px; height:800px;" >
<img src="admin/Product_Picture/<?php echo $row['Product_Picture']; ?>" alt="Denim Jeans" style="width:100%;   left: 250px; height: 200px;">
<h1><?php echo $row['Produced_name']; ?></h1>
<p class="price"><?php echo $row['price']; ?></p>
<p><?php echo $row['Product_Type']; ?></p>
<form method="post" action="admin/fun/add_Buy.php">
<input type="hidden" name="user_name" value="<?php echo $username ; ?>">
<input type="hidden" name="number_of_products" value="<?php echo $row['id']; ?>" >
<?php
if ($username!=='زائر') {
 
?>
 <p><button>طلب </button></p>
<?php
}
?>
</form>
<label><?php echo $row['note']; ?></label>
</div>

<?php
}
?>

</center>
</body>
</html>
