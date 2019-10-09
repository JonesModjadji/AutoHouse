<?php
include('session.php');
 $message = "";

if(isset($_POST['SAVE'])){
	
	$Price= $_POST["Price"];
	$Unit = $_POST["Unit"];
	$ApartmentDetails = $_POST["ApartmentDetails"];
	$DatePosted =stripslashes($_POST["DatePosted"]);
	$Status = $_POST["Status"];
	//$RoomImg1 =$_POST["RoomImg1"];
	//$RoomImg2 =$_POST["RoomImg2"];
	//$RoomImg3 =$_POST["RoomImg3"];

    $target_dir = "Images/";
    $target_file = $target_dir . basename($_FILES["RoomImg1"]["name"]);
	$target_file2 = $target_dir . basename($_FILES["RoomImg2"]["name"]);
	$target_file3 = $target_dir . basename($_FILES["RoomImg3"]["name"]);
	
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	 $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
	  $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
      $check = getimagesize($_FILES["RoomImg1"]["tmp_name"]);
	   $check2 = getimagesize($_FILES["RoomImg2"]["tmp_name"]);
	    $check3 = getimagesize($_FILES["RoomImg3"]["tmp_name"]);
		
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
  if (($_FILES["RoomImg1"]["size"] > 50000000)&&($_FILES["RoomImg2"]["size"] > 50000000)&&($_FILES["RoomImg3"]["size"] > 50000000)) {
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
    if (move_uploaded_file($_FILES["RoomImg1"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["RoomImg2"]["tmp_name"], $target_file2) && move_uploaded_file($_FILES["RoomImg3"]["tmp_name"], $target_file3)) {
      // Check connection

        if($con === false){

          die("ERROR: Could not connect. " . mysqli_connect_error());

        }

        $RoomImg1 =  basename( $_FILES["RoomImg1"]["name"]);
		 $RoomImg2 =  basename( $_FILES["RoomImg2"]["name"]);
		  $RoomImg3 =  basename( $_FILES["RoomImg3"]["name"]);

$sql = "INSERT INTO apartments (Price, UnitNumber,ApartmentDetails,DatePosted,Status,RoomImg1,RoomImg2,RoomImg3)
 VALUES ('$Price','$Unit','$ApartmentDetails','$DatePosted','$Status','$RoomImg1','$RoomImg2','$RoomImg3')";

 $results = mysqli_query($con,$sql);

 if ($results) {
 	 echo "<script>alert('Getting Somewhere')</script>";

 }
 else
 {
 	 echo "<script>alert('Nowhere')</script>";
	 
 }
$message= "The file ". basename( $_FILES["RoomImg1"]["name"]). " has been uploaded.";
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
<a href="#" style="text-decoration:none; color:black;">Add Apartment</a> | <a href="Admin3.php" style="text-decoration:none; color:grey;">Add Advertisement</a>
</label>
</div>
<tr>
<td><input type="text" placeholder="Price" name="Price"></td>
</tr>
<tr>
<td><select name="Unit">
  <option value="101">101</option>
   <option value="102">102</option>
  <option value="103">103</option>
   <option value="104">104</option>
</select></td>
</tr>
<tr>
<td><textarea placeholder="Apartment Destails/Description" name="ApartmentDetails"></textarea></td>
</tr>
<tr>
<td><input type="date" name="DatePosted" placeholder="yyyy/mm/dd"></td>
</tr>
<tr>
<td><select name="Status">
  <option value="Available">Available</option>
   <option value="Unavailable">Unavailable</option>
</select></td>
</tr>
<tr>
<td><label>Room Images</label></td>
</tr>
<tr>
<td><input type="file" placeholder="Room Image 1" name="RoomImg1" id="RoomImg1"></td>
</tr>
<tr>
<td><input type="file" placeholder="Room Image 2"  name="RoomImg2" id="RoomImg2"  ></td>
</tr>
<tr>
<td><input type="file" placeholder="Room Image 3"  name="RoomImg3" id="RoomImg3" ></td>
</tr>
<tr>
<td><input type="submit" value="SAVE" name="SAVE"></td>
</tr>
</table>
</form>
</center>
</body>
</html>