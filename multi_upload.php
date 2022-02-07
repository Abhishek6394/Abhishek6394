<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.container{
		 border: 2px solid black;
  	     outline: #4CAF50 solid 5px;
         margin: auto;  
         padding: 20px;
        text-align: center;
        background-color: blue;
        margin-left: 200px;
        margin-top: 200px;
        margin-right: 200px;
		}
		.pp{
        color: white;
		}
	</style>
</head>
<body>
<form action="multi_connect.php"   method="post" enctype="multipart/form-data">
<div class="container">
<center>
<label class="pp">Multiple Image Upload</label>
<input type="file" name="upload[]" multiple/>
<input type="submit" name="submit" value="Upload">
</center>
</div>
</form>
</body>
</html>