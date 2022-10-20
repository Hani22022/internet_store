<!DOCTYPE html>
<html>
<head>
<a href="http://localhost/Produced_name/"><button>رجوع</button></a>
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
  $n2=$_GET['n2'];
?>
<a href="admin.php"><button>التقارير</button></a>

<h1>المشتريات</h1>
<form action="request.php" method="get">
<input type="text" id="n1" name="n1" value="<?php echo $n1 ?>">
<select name="n2">
<option value="<?php echo $n2 ?>"><?php echo $n2; ?></option>
<option value="طلب">شراء</option>
<option value="تم الارجاع">استرداد </option>
<option value="مفقود">طريقة الدفع</option>

<option></option>
</select>
<input type="submit" value="البحث ">
</form>

<table id="customers"> 
  <tr>
    <th>م</th>
    <th>اسم المستخدم</th>
    <th>اسم المنتج</th>
    <th>النوع</th>
    <th>عدد القطع</th>
    <th>تاريخ الطلب</th>
    <th>ملاحظات</th>
    <th>الحالة</th>
    <th>حفظ</th>
</tr>
<?php
$no=0;  //                        البحث عن طريق اليوزر او الملاحظات اوالحالة user_name and   customer_case and  notes     
$sql="SELECT * FROM Buy  WHERE ( user_name like '%$n1%' or customer_case like '%$n1%' or notes like '%$n1%' ) and customer_case like '%$n2%' ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
 $number_of_products= $row['number_of_products']; // اضفنابوك نمبر في متغير
 $sql2="SELECT * FROM Products  WHERE id ='$number_of_products' ";
$result2 = $conn->query($sql2);// ملاحظة ضروري نغير الارقام مثل ريزلتت نخليها ريزلت 2
while($row2 = $result2->fetch_assoc()) {
$Produced_name= $row2['Produced_name'];
$Product_Type= $row2['Product_Type'];
$isbn= $row2['isbn'];
}
$no=$no+1; //غير مفهوم
?>
  <tr>
<form action="fun/update_request.php" method="post">
<input type="hidden" id="n1" name="id" value="<?php echo $row['id']; ?>">
<td><?php echo $no; ?></td>
<td><?php echo $row['user_name']; ?></td> <!-- يطبع لي اسم اللي استعار   -->
<th><?php echo $Produced_name; ?></th> <!-- يطبع لي اسم الكتاب  -->
<th><?php echo $Product_Type; ?></th> <!-- يطبع لي اسم المولف  -->
<th><?php echo $isbn; ?></th>
<td><?php echo $row['customer_time']; ?></td>
<td><input style="width: 100%;" type="text" id="n1" name="notes" value="<?php echo $row['notes']; ?>"></td>
<td>
<select name="customer_case">
<option value="<?php echo $row['customer_case']; ?>"><?php echo $row['customer_case']; ?></option>
<option value="طلب">شراء</option>
<option value="تم الارجاع">استرداد </option>
<option value="مفقود">طريقة الدفع</option>

</select>
<td><input type="submit" value="حفظ التغيرات"></td>
</form>
  </tr>
<?php
}
?>
</table>

</body>
</html>


