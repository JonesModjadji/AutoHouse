<?php
include('Connection.php');
session_start();
$error="";

  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myname = mysqli_real_escape_string($con,$_POST['Username']);
      $mypassword = $_POST['Password']; 
      
      $sql = "SELECT * FROM users WHERE Username = '$myname' AND Password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myname;
         
         header("location: Admin.php");
      }else {
        echo "<script>alert('UserName or Password is incorrect')</script>";
      }
  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Menlyn Place</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="Css/Style.css" rel="stylesheet" type="text/css">
</head>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<body>
  <center>
  <div class="container3">
<form action="" method="post" style="vertical-align:middle;">
<h1 style="color:black;">Login</h1>
<input type="text" name="Username" required="" placeholder="UserName" style="width:60%; color:#524719;">
<input type="Password" name="Password" required="" placeholder="Password" style="width:60%; color:#524719;">
<label style="text-align:center; margin-left:-1px;"><a href="reset.php">Reset Password here</a></label>	
<input style="color: #524719;" type="submit" name="Login" value="Login">
</form>
</div>
</center>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>