<?php
include('Connection.php');
$sql = "SELECT * FROM Cars ORDER BY carsID LIMIT 0,10";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row}
   ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AUTOHOUSE/BAKKIES</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Js/JavaScript.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
  <div class="section"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Images/IMG1.jfif" alt="Los Angeles" style="width:100%;">
      </div>
      <div class="item">
        <img src="Images/IMG2.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="Images/IMG3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      
      <span class="sr-only">Next</span>
    </a>

  </div>
   <div class="section4" id="section2"> 
  <div class="container2">
<div class="wrap">
<h3>AUTOHOUSE</h3>
<b><h2><a href="#content">Bakkies</a></h2></b>
</div>
</div>
<div class="content" id="content">
<?php
 while($row = $result->fetch_assoc()) {
	 echo'<div id="ImagePane">
	 <center><div class="carousel slide" data-ride="carousel" >
  <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="Images/'.$row["CarIMG1"].'" alt="Los Angeles" id="Image">
      </div>
      <div class="item">
        <img src="Images/'.$row["CarIMG2"].'" id="Image";  alt="Chicago">
      </div>
    
      <div class="item">
        <img src="Images/'.$row["CarIMG3"].'" id="Image"  alt="New york" >
      </div>
	  
	 <label style="margin-left:-0.1vw;">Price :' . $row["Price"].'</label>
	 <hr style="width:80%; color:#524719;"><br>
    </div>
</div></center>
  </div>';
    }
} 
?>
</div>
</div>
<div class="container3">
<center style="font-size:150%;"><a href="#" style="display:none;"><<</a> | <a href="Cars.php"> 1 </a> | <a href="Cars2.php"> 2 </a> | <a href="Cars2.php">>></a></center>
<footer>
<center style="padding-top:1%;font-size:150%;">Copyright © 2018 K<red>I</red>NEC </center>
</footer>
</div>
</div>
<div class="container" id="#ftco-navbar">
      <a href="Login.php" class="navbar-brand" ><bb><Green>AUTO</Green>HOUSE</bb> <hr></a>
      
      <div class="topnav" id="myTopnav">
      <a href="#home" class="active" style="display:none;">HOME</a> 
      <a href="Index.php">HOME</a> 
      <a href="Cars.php">Cars</a>
      <a href="Others.php">Others</a>
      <a href="javascript:void(0);" class="icon" onClick="myFunction()"> 
      <em class="fa fa-bars"></em> 
      </a>
        <hr>
</div>
<div class="text">
<left style="margin-left:-10%;">-Bakkies</left>
<br>
<p>
<h4></h4>
<h4></h4>
<h4></h4>
</p>
<a href="#section2" style="color:black; font-size:16px;"><button style=" position:inherit;margin-left:1px;">Continue</button></a>
</div>
</div>

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