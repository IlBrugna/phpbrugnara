<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<table>



<?php
echo "<tr>";
for($i=1;$i<5;$i++){
echo "<th>intestazione $i</th>";
}
echo "</tr>";
for($i=0;$i<3;$i++){
echo "<tr>";

for($y=0;$y<4;$y++){
echo "<td>cella $i-$y</td>";
}
echo "</tr>";



}
?>

</table>
</body>
</html>