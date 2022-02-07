<?php 
$conn= mysqli_connect("localhost","root","","kush");

 // if(isset($_GET['id'])){ 

$id = $_GET['id'];

// print_r($id);
// die('=========');

$q = "DELETE FROM abhi WHERE id = '$id'";

mysqli_query($conn,$q);
header("Location:fetch.php?msg=1");
// }
?>