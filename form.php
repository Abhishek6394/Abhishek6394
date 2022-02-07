<?php
$conn= mysqli_connect("localhost","root","","kush");
$fname = "";
$lname = "";
if(isset($_GET['edit']) ){

     $id = $_GET['edit'];  
     $sql = "SELECT * FROM abhi WHERE id=$id";
     $res = mysqli_query($conn,$sql); 
     $row= mysqli_fetch_assoc($res);

     $fname = $row['fname'];
     $lname = $row['lname'];
}
  
if(isset($_POST['edit']) ){
        $udtitle = $_POST['fname'];
        $udcontent = $_POST['lname'];
        $res = mysqli_query("UPDATE abhi SET fname = $udtitle,lname = $udcontent WHERE id = $id");
  }

if(isset($_POST['submit'])){

   $fname_name = $_POST['fname'];
   $last_name = $_POST['lname'];
   $sql = "INSERT INTO abhi (fname,lname) VALUES ('$fname_name','$last_name')";

   if (mysqli_query($conn, $sql)) {
      echo "data inserted successfully";
        header("Location:fetch.php");
   }else{
          echo"please inter your data correctly";
   }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>

<form method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>"><br>
  
  <input type="submit" name="<?php if(isset($_GET['edit'])){ echo "edit"; }else{ echo "submit"; } ?>" value="submit">
</form>

</body>
</html>