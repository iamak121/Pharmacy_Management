<?php
$username="root";
$password="";
$server='localhost';
$db='pms';
$con =mysqli_connect($server,$username,$password,$db);
if($con){
	?>
   
	<?php
}else{
	die("no connection".mysqli_connect_error());
}