<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

$conn= mysqli_connect("localhost","root","","newbase");

// if($conn){
// 	echo("database is successful connected");

// }else{

// echo("connection is failed");

// }

if (isset($_POST['submit'])) {    
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 

        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "image/".$filename;
      // echo $myusername;
      // echo $mypassword;
      // die('hhhhhhhhhh');
      
        $sql = "select * from login where username = '$myusername' and password = '$mypassword'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result);  
        $count = mysqli_num_rows($result);  
       // echo "$count";
       // die('yyyyyyyyy');
   	
      if($count > 0 ) {
         echo "login Successful";
         // header("location: welcome.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }

?>