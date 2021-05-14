<?php
$con=mysqli_connect("localhost","root","","pms") or die(mysqli_error($con));
$cust_name=mysqli_real_escape_string($con,$_POST['cust_name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$phone= mysqli_real_escape_string($con,$_POST['phone']);
$medicine_name=mysqli_real_escape_string($con,$_POST['medicine_name']);
$m_id=mysqli_real_escape_string($con,$_POST['m_id']);
$user_registeration_query="insert into customer(cust_name,email,phone,medicine_name,m_id) values ('$cust_name','$email',$phone,'$medicine_name',$m_id)";

$user_registeration_submit = mysqli_query($con,$user_registeration_query) or die (mysqli_error($con));
header( "location:index.php?" );

?>
