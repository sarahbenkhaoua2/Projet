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
  
  display: inline;


 }
 .button {
  background-color:#ebebe0; ; 
  color: black; 
  border: 2px solid #ebebe0;
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


   
<div class="galerie">

  <?php
    $alger = array("casbah","hama","makam","a4","a5","hama2");
    shuffle($alger);

$tlemcan = array("t1","t2","t3","t4","t5","t6","t7");
    shuffle($tlemcan);



$oran = array("o1","o2","o3","o4");
    shuffle($oran);



$annaba = array("an1","an2","an3","an4");
    shuffle($annaba);


$bejaia = array("b1","b2","b3","b4");
    shuffle($bejaia);

 
if(isset($_POST['submit'])){
   
   $recherche=$_POST['recherche'];
    
    if($recherche=="alger"){
      foreach ($alger as $al) {
    echo "<img src='$al.jpg' style='width:100%'> <br>";}
    }

    if($recherche=="oran"){
       foreach ($oran as $or) {
      echo "<img src='$or.jpg' style='width:100%'> <br>";}
      }

    if($recherche=="tlemcan"){
      foreach ($tlemcan as $tl) {
    echo "<img src='$tl.jpg' style='width:100%'> <br>"; }
      }

    if($recherche=="annaba"){
      foreach ($annaba as $an) {
    echo "<img src='$an.jpg' style='width:100%'> <br>";}
      }
    if($recherche=="bejaia"){
     foreach ($bejaia as $bj) {
    echo "<img src='$bj.jpg' style='width:100%'> <br>";}
     }
 }



   ?>

</div>





</body>
</html>

