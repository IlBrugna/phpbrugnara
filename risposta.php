<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
session_start();
//echo $_SESSION["parola"].'<br>';
$_POST["risp"] = strtoupper($_POST["risp"]);
//echo $_POST["risp"].'<br>';
echo $_POST["risp"];
if ($_SESSION["parola"]==$_POST["risp"]) {echo " è la risposta giusta!";}
else echo " non è la risposta giusta, ci dispiace!";


?>


</body>
</html>