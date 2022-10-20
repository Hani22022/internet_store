<!DOCTYPE html>
<html>
<head>
<a href="http://localhost/internet_store/"><button>رجوع</button></a>
<link rel="stylesheet" type="text/css" href="../gcss.css">
<style type="text/css">
main{
	float:right;
}
</style>
</head>
<body>
<?php
  include ('../connect.php');
error_reporting(0);
  $n1=$_GET['n1'];
?>
<a href="admin.php"><button>التقارير</button></a>

<h1>المشتريات</h1>
<form action="request.php" method="get">
<input type="text" id="n1" name="n1" value="<?php echo $n1 ?>">
<input type="submit" value="البحث ">
</form>

<table id="customers">
  <tr>
    <th>م</th>
    <th>اسم المونتج</th>
    <th>نوع المونتج</th>
    <th>عدد القطع</th>
    <th>طلب</th>
    <th>الرصيد</th>
  </tr>
  <?php
  $no=0;
$sql="SELECT * FROM Products  WHERE Produced_name like '%$n1%' or Product_Type like '%$n1%' or isbn like '%$n1%' or author_name like '%$n1%' ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
 $id= $row['id'];
  $number_of_products0=$row['author_name'];
 $sql2="SELECT  count(number_of_products)  FROM Buy  WHERE number_of_products ='$id' and customer_case ='طلب' ";
$result2 = $conn->query($sql2);
while($row2 = $result2->fetch_assoc()) {
  $number_of_products1=$row2['count(number_of_products)'];

 

} // سوينا عملية حسابية تخصم من الرصيد طرف الطالب ومفقود ومتأخر     
$number_of_products6=$number_of_products0-$number_of_products2-$number_of_products3-$number_of_products5 ;
$no=$no+1;
?>
  <tr>
<form action="fun/update_request.php" method="post">
<input type="hidden" id="n1" name="id" value="<?php echo $row['id']; ?>">
<td><?php echo $no; ?></td>
<th><?php echo $row['Produced_name'] ; ?></th>
<th><?php echo $row['Product_Type'] ; ?></th>
<th><?php echo $row['isbn'] ; ?></th>
<td><?php echo $row['author_name']; ?></td>
<td><?php echo $number_of_products1; ?></td>
<td><?php echo $number_of_products2; ?></td>
<td><?php echo $number_of_products3; ?></td>
<td><?php echo $number_of_products4; ?></td>
<td><?php echo $number_of_products5; ?></td>
<td><?php echo $number_of_products6; ?></td>
</form>
  </tr>
<?php
}
?>
</table>

</body>
</html>


