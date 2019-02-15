<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>VISITE BLEDI - Galerie</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  
  body {
    background-image: url("makam.jpg");

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
 
 .button1 {
  float: right;
  background-color:#2f2f2f; ; 
  color: black; 
  border: 2px solid #00000;

}
  .button2 {
  float: left;
  background-color:#00000; ; 
  color: black; 
  border: 2px solid #00000;

}

.b{
  font-size: 60px;
}

.containere{
    width: 800px;
   
    
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
<center>
<br><br><br><br>
<div class="containere">
<div class="w3-card-4">
  
  <form class="w3-container" action="/action_page.php">
    <p>      
    <label class="w3-text-brown" name="name"><b>Name</b> </label>
    <input class="w3-input w3-border w3-sand" name="first" type="text"></p>
    <p>      
    <label class="w3-text-brown" name="pass"><b>Password</b></label>
    <input class="w3-input w3-border w3-sand" name="last" type="text"></p>

    <p>
    <button class="w3-btn w3-brown" name="submit">SINGUP</button>
  <button class="w3-btn w3-brown">LOGUP</button></p>
  </form>
</div>
</div>


</center>


  




</body>
</html>
