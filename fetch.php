<?php
error_reporting(0);


$msg = $_GET['msg'];
if($msg == 1){
	echo "<script>alert('Data deletef successfully')</script>";
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>



<?php 

$conn = mysqli_connect("localhost","root","","kush");
?>


<h1 style="text-align: center;font-style: italic;text-decoration:underline;">All Records</h1>
<table style="border: 1px solid black;margin-top:50px ;" width="80%" align="center">
	<thead>
		<tr>
			<th>Id</th>
			<th>first Name</th>
			<th>Last Name</th>
			<th> Action</th>
			<th> Action </th>
			
		</tr>
	</thead>
     <?php  

        $sql=" select * from abhi ";
 
       $query= mysqli_query($conn,$sql);

       while ($row = mysqli_fetch_array($query)) { 
	?>
			<tr style="text-align:center;">
		    <td> <?php echo $row['id']; ?>   </td>
			<td> <?php echo $row['fname']; ?></td>
			<td> <?php echo $row['lname']; ?></td>

			
			<td>
				<a href="form.php?edit=<?php echo $row['id']; ?>"  >Edit</a>
			</td>
			<td>
				<a href="delete.php?id=<?php echo $row['id']; ?>" >Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
</body>
</html>