<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
session_start();
//echo $_SESSION["parola"].'<br>';

//echo $_POST["risp"].'<br>';
echo $_POST["risp"];
if ($_SESSION["parola"]==$_POST["risp"]) {echo " è la risposta giusta!";}
else echo " non è la risposta giusta, ci dispiace!";


?>


</body>
</html>