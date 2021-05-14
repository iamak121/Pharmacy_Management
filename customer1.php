
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <link rel="stylesheet" href="styling.css">
  <!--  font awesome-->
  <script src="https://kit.fontawesome.com/1d96a7e5d4.js" crossorigin="anonymous"></script>
 
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">


  <!-- Bootstrap Scripts -->
  
</head>
<body>
<div class="main-div container">
	<h1> Customer details</h1>
	<div class="main__table">
		<div class="table">
			<table>
				<thead>
				<tr>
				<th> Id</th>
				<th> Name</th>
				<th> Phone</th>
				<th> Email</th>
				<th> Medicine Name</th>
				<th> medicine ID </th>
				
				<th colspan="2"> operation</th>
			</tr>
		 </thead>
		 <tbody> 
		 	<?php 
                   include 'connection.php';
                   $selectquery="select * from customer ";
                   $query=mysqli_query($con,$selectquery);
                   $nums=mysqli_num_rows($query);
                   while($res=mysqli_fetch_array($query)){
	               ?>


	               <tr>
		 		<td> <?php echo $res['cust_id'] ; ?> </td>
		 		<td> <?php echo $res['cust_name'] ;?>  </td>
		 		<td> <?php echo $res['phone'] ; ?> </td>
		 		<td> <?php echo $res['email'] ; ?> </td>
		 		<td> <?php echo $res['medicine_name'] ; ?> </td>
		 		<td> <?php echo $res['m_id'] ; ?> </td>
		 		<td> <i class="fa fa-edit" aria-hidden="true"></i> </td>
		 		<td> <i class="fa fa-trash" aria-hidden="true"></i></td>

		 	</tr>
		 	<?php
                   }
                   ?>
		 	
		 </tbody>
			</table>
	</div>
</div>

	
</body>
</html>
