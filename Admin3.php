<?php
include('session.php');
 $message = "";

if(isset($_POST['SAVE'])){
	
	$Name= $_POST["Name"];
	$Contact = $_POST["Contact"];
	$AdDetails = $_POST["AdDetails"];
	
    $target_dir = "Images/";
    $target_file = $target_dir . basename($_FILES["AdImg1"]["name"]);
	$target_file2 = $target_dir . basename($_FILES["AdImg2"]["name"]);
	$target_file3 = $target_dir . basename($_FILES["AdImg3"]["name"]);
	
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	 $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
	  $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
      $check = getimagesize($_FILES["AdImg1"]["tmp_name"]);
	   $check2 = getimagesize($_FILES["AdImg2"]["tmp_name"]);
	    $check3 = getimagesize($_FILES["AdImg3"]["tmp_name"]);
		
      if(($check !== false) && ($check2 !== false) && ($check3 !== false)) {
        $message ="File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        $message= "File is not an image.";
        $uploadOk = 0;
      }
	  // Check if file already exists
  if ((file_exists($target_file))&&(file_exists($target_file2))&&(file_exists($target_file3))) {
    $message= "Sorry, file already exists.";
    $uploadOk = 0;
  }
  // Check file size
  if (($_FILES["AdImg1"]["size"] > 50000000)&&($_FILES["AdImg2"]["size"] > 50000000)&&($_FILES["AdImg3"]["size"] > 50000000)) {
    $message= "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    $message= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  // Allow certain file formats 2
  if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
  && $imageFileType2 != "gif" ) {
    $message= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
  && $imageFileType3 != "gif" ) {
    $message= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    $message= "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["AdImg1"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["AdImg2"]["tmp_name"], $target_file2) && move_uploaded_file($_FILES["AdImg3"]["tmp_name"], $target_file3)) {
      // Check connection

        if($con === false){

          die("ERROR: Could not connect. " . mysqli_connect_error());

        }

        $AdImg1 =  basename( $_FILES["AdImg1"]["name"]);
		 $AdImg2 =  basename( $_FILES["AdImg2"]["name"]);
		  $AdImg3 =  basename( $_FILES["AdImg3"]["name"]);

$sql = "INSERT INTO advertisements (Name,Contact,AdDetails,AdImg1,AdImg2,AdImg3)
 VALUES ('$Name','$Contact','$AdDetails','$AdImg1','$AdImg2','$AdImg3')";

 $results = mysqli_query($con,$sql);

 if ($results) {
 	 echo "<script>alert('Getting Somewhere')</script>";

 }
 else
 {
 	 echo "<script>alert('Nowhere')</script>";
	 
 }
$message= "The file ". basename( $_FILES["AdImg1"]["name"]). " has been uploaded.";
    } else {
      $message= "Sorry, there was an error uploading your file.";
    }}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Admin</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="Css/Style.css" rel="stylesheet" type="text/css">
</head>
<body>
<center><form action="" method="post"  style="vertical-align:middle; align-content:center; width:100%;" enctype="multipart/form-data">
<table style="width:40%;">
<div style="display:inline-block;">
<label style="font-size:30px;"><a href="Admin.php" style="text-decoration:none; color:grey;">Add Room</a> | 
<a href="Admin2.php" style="text-decoration:none; color:grey;">Add Apartment</a> | <a href="#" style="text-decoration:none; color:black;">Add Advertisement</a>
</label>
</div>
<tr>
<td><input type="text" placeholder="Name" name="Name"></td>
</tr>
<tr>
<td><input type="text" placeholder="Contacts" name="Contact"></td>
</tr>
<tr>
<td><textarea placeholder="Ad Destails/Description" name="AdDetails"></textarea></td>
</tr>
<tr>
<td><label>Room Images</label></td>
</tr>
<tr>
<td><input type="file" placeholder="Room Image 1" name="AdImg1" id="AdImg1"></td>
</tr>
<tr>
<td><input type="file" placeholder="Room Image 2"  name="AdImg2" id="AdImg2"  ></td>
</tr>
<tr>
<td><input type="file" placeholder="Room Image 3"  name="AdImg3" id="AdImg3" ></td>
</tr>
<tr>
<td><input type="submit" value="SAVE" name="SAVE"></td>
</tr>
</table>
</form>
</center>
</body>
</html>