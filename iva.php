<?php
$prodotti = array(
array ("nome"=>"pane","prezzo"=>2,"qnt"=>6),
array ("nome"=>"cioccolato","prezzo"=>4,"qnt"=>2),
array ("nome"=>"biscotti","prezzo"=>3,"qnt"=>1)
);
$prezzotot;
for ($i=0; $i<3; $i++){ 
$prezzo = ($prodotti[$i]["prezzo"]*$prodotti[$i]["qnt"]);
$prezzoiva = $prezzo + ($prezzo*0.22);
echo "il prezzo del prodotto ".'"'.$prodotti[$i]["nome"].'"'." con l'iva risulta essere di ". $prezzoiva."<br>";
$prezzotot+=$prezzoiva;}
echo "il prezzo totale con iva risulta ".$prezzotot;
?>
