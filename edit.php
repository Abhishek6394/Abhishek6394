<?php  

     $conn= mysqli_connect("localhost","root","","kush");
  
    if(isset($_GET['edit']) ){

         $id = $_GET['edit'];  

         $sql = "SELECT * FROM abhi WHERE id=$id";
         $res = mysqli_query($conn,$sql); 
         $row= mysqli_fetch_assoc($res);

    }
  
    if(isset($_POST['edit']) ){

            $udtitle = $_POST['fname'];
            $udcontent = $_POST['lname'];


             $res = mysqli_query("UPDATE abhi SET fname = $udtitle,lname = $udcontent WHERE id = $id");
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

  <form  action=""   method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="<?php echo $row['fname'] ?>" ><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="<?php echo $row['lname'] ?>"><br>
  
  <input type="submit" name="edit" value="submit">

  </form>

</body>
</html>
