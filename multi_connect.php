<?php
$conn= mysqli_connect('localhost','root','','newbase');

if(isset($_POST['submit'])){

foreach ($_FILES['upload']['tmp_name'] as $key => $value) {
 $filename = $_FILES['upload']['name'][$key];
 $filename_tmp = $_FILES['upload']['tmp_name'][$key];
  
  $folder= "media/".$filename;
 
	move_uploaded_file($filename_tmp,$folder);

	$sql= "INSERT INTO `multi_photo`( `image`) VALUES ('$filename')";

	// print_r($sql);
	// die('gggggggggggg');

}
	 if($result=mysqli_query($conn,$sql)){

       echo "successful";
	 }else{
	 	echo "Invalid data";
	 }

}
?>

