<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<table>

<?php
$array[Marco] = "Informatica";
$array[Andrea] = "Motoria";
$array[Luca] = "Religione";
$array[Giovanni] = "Italiano";
$array[Simone] = "Ipad";



echo "<tr> <th>Alunno</th><th>Materia.Pref</th></tr>";

foreach($array as $var){
echo "<tr><td>".array_search($var, $array)."</td> <td>$var</td> </tr>";

}
?>

</table>
</body>
</html>

