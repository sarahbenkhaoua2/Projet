<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>VISITE BLEDI - Galerie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 70px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 

    background-color: #ffffff; /* Dark Blue */
    color: #;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 15px;
    letter-spacing: 1px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
 .galerie {
  width: 100px ;
  height: 100px ;

 }
 .button {
  background-color:#ebebe0; ; 
  color: black; 
  border: 2px solid #ebebe0;
}
 
 img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="download.png"</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html">HOME</a></li>
        <li><a href="home1.php">GALERIE</a></li>
        <li><a href="#">RESERVATION</a></li>
        <li><a href="#">EVENTS</a></li><li><a href="#">MAP</a></li>
        <li><a href="#">LOGIN</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->


<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin"></h3>
  <a href="#" class="btn btn-default btn-lg">
    <form action="galerie2.php" method="post">
   <input type="text" name="recherche" placeholder="Search.."> <button class="button" name="submit" >Recherche</button> 
  </form> 
  </a>
</div>

<h2 style="text-align:center">Algeria</h2>

<div class="container">
  <div class="mySlides">
    
    <img src="t1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="an1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="o2.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="hama.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="makam.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="b1.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="t6.jpg" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="an2.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="hama.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="o3.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="t3.jpg" style="width:100%" onclick="currentSlide(5)" alt="">
    </div>    
    <div class="column">
      <img class="demo cursor" src="b1.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
   


  <?php
    $alger = array("casbah","hama","makam","a4");
    shuffle($alger);

$tlemcan = array("t1","t2","t3","t4","t5","t6","t7");
    shuffle($tlemcan);



$oran = array("o1","o2","o3","o4");
    shuffle($oran);



$annaba = array("an1","an2");
    shuffle($annaba);


$bejaia = array("b1","b2","b3");
    shuffle($bejaia);

 
if(isset($_POST['submit'])){
   
   $recherche=$_POST['recherche'];
    
    if($recherche=="alger"){
      foreach ($alger as $al) {
    echo "<img src='$al.jpg'> <br>";}
    }

    if($recherche=="oran"){
       foreach ($oran as $or) {
      echo "<img src='$or.jpg'> <br>";}
      }

    if($recherche=="tlemcan"){
      foreach ($tlemcan as $tl) {
    echo "<img src='$tl.jpg'> <br>"; }
      }

    if($recherche=="annaba"){
      foreach ($annaba as $an) {
    echo "<img src='$an.jpg'> <br>";}
      }
    if($recherche=="bejaia"){
     foreach ($bejaia as $bj) {
    echo "<img src='$bj.jpg'> <br>";}
     }
 }



   ?>







</body>
</html>

