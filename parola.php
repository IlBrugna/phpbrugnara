<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
session_start();
$parole = array("CIAO","GATTO","ROSSO");
$indizi = array("Tipico saluto italiano", "Animale domestico che miagola", "Il colore dell'amore");
$cript = array();

$selezione=array_rand($parole, 1);
$_SESSION["parola"]=$parole[$selezione];
echo '<br><br><br>'; 
//echo strtoupper($parole[0]);
for ($i=0;$i<strlen($parole[$selezione]);$i++) $cript[$i]='_';

for ($i=0;$i<strlen($parole[$selezione]);$i++) {echo $cript[$i]." ";}

echo '<br><br><br>';


//echo $parole[$selezione].'<br>';
echo $indizi[$selezione];
echo "<br><br><br>";

//echo '<form action="indizio.php" method="post">
//      <input type="submit" value="Vuoi un aiutino?">
//      </form>';

echo '<form action="risposta.php" method="post" autocomplete="off">
Risposta: <input type="text" name="risp"><br>
<input type="submit">
</form>';


?>


</body>
</html>