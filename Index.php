<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AutoHouse</title>
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
  <div class="section2" id="section2"> 
  <div class="container2">
<div class="wrap">
<h3>AUTOHOUSE</h3>
<b><h2><a href="#content">WHO ARE WE</a></h2></b>
</div>
</div>
<div class="content" id="content">sds</div>
</div>
 <div class="section3" id="section3"> 
  <div class="container2">
  <div class="wrap">
  <h3>DRIVE OFF TODAY</h3>
<b><h2><a href="#content2">CONTACT US</a></h2></b>
</div>
</div>
<div class="content" id="content2" >
<form action="mailto:Jonesmodjadji@gmail.com"  method="GET" >
<input type="text" placeholder="Your Name" name="name">
<input type="text" placeholder="Subject" name="subject">
<textarea placeholder="Message" name="body"></textarea>
<input type="submit" value="SEND MESSAGE">
</form>
</div>
</div>
<div class="container3">
<footer>
<center style="padding-top:1%;font-size:150%;">Copyright © 2018 K<red>I</red>NEC </center>
</footer>
</div>
</div>
</div>

<div class="container" id="#ftco-navbar">
      <a class="navbar-brand" href="Login.php" ><bb><Green>AUTO</Green>HOUSE</bb> <hr></a>
      
      <div class="topnav" id="myTopnav">
      <a href="#home" class="active" style="display:none;">HOME</a> 
      <a href="Cars.php">Cars</a> 
      <a href="Bakkies.php">Bakkies</a>
      <a href="Others.php">Others</a>
      <a href="#section2">About US</a>
      <a href="#section3">Contact Us</a>  
      <a href="javascript:void(0);" class="icon" onClick="myFunction()"> 
      <em class="fa fa-bars"></em> 
      </a>
        <hr>
</div>
<div class="text">
WELCOME
<br>
<p>
<h4>hjjhfhjfhjf</h4>
<h4>hjjhfhjfhjf</h4>
<h4>hjjhfhjfhjf</h4>
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