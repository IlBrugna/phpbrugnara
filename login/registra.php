<?php
 $host = "localhost";
 $username = "davidbrugnara";
 $password= "";
 $db_nome="my_davidbrugnara";
 $conn = new mysqli($host, $username, $password, $db_nome);
 if ($conn->connect_errno) {
  echo "Impossibile connettersi al server: " . $conn->connect_error."\n";
  exit;
 }
 // acquisizione dati dal form HTML
 $email=strtolower($_POST["email"]);
 $password= password_hash($_POST["password"], PASSWORD_DEFAULT);
 //comando SQL
 $sql = "INSERT INTO utenti2 (Email, Password)";
 $sql .= "VALUES ('$email','$password')";
 if ($conn-> query($sql)) {
 echo "Utente registrato correttamente \n";
 } else {
 echo "Errore nella registrazione: ". $conn->error. "\n";
 }
 $conn->close();
 ?>
 
 <html>
 <head>
 <link rel="stylesheet" type="text/css" href="stile.css"> 
 </head>
  <body style="background-image: url('dogg.jpg'); vertical-align: middle; text-align:center;">
  <form method="get" action="/login/login.html">
    <button type="submit">Torna al login</button>
</form>
</body>
</html>