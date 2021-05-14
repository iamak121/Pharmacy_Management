<?php
$con=mysqli_connect("localhost","root","","pms") or die(mysqli_error($con));

$m_name=mysqli_real_escape_string($con,$_POST['m_name']);
$m_price= mysqli_real_escape_string($con,$_POST['m_price']);
$m_manufacturer=mysqli_real_escape_string($con,$_POST['m_manufacturer']);
$m_expiry=mysqli_real_escape_string($con,$_POST['m_expiry']);
$user_registeration_query="insert into medicine(m_name,m_price,m_manufacturer,m_expiry) values ('$m_name',$m_price,'$m_manufacturer','$m_expiry')";

$user_registeration_submit = mysqli_query($con,$user_registeration_query) or die (mysqli_error($con));
header( "location:dashboard.php?" );

?>
