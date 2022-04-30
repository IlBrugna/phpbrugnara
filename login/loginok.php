<!DOCTYPE html>
<?php 
 session_start();
 if (!isset($_SESSION['email'])) {
 header("Location: login.html");
 }
 ?>
 <html>
 <head>
 <link rel="stylesheet" type="text/css" href="stile.css"> 
 </head>
 <body style="background-image: url('dogg.jpg'); vertical-align: middle; text-align:center;">
  <p class="myP">Idenfticazione utente riuscita! <br>
  Benvenuto nell'area risverata <br>
  premi su <a href="logout.php">Logout</a> per disconnetterti</p>
  </body>
  </html>