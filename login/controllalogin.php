<?php
$host="localhost";
$username="davidbrugnara";
$password="";
$db_nome="my_davidbrugnara";
$tab_nome="utenti2";
//connessione al server
$conn = new mysqli($host,$username,$password,$db_nome);
if ($conn -> connect_errno) {
echo "Impossibile connettersi al server: ".$conn->connect_error."\n";
exit;
}
//acquisizione dati dal form HTML
$email = strtolower($_POST["email"]);
$password = $_POST["password"];
//protezione per SQL Injection
$email = stripslashes($email);
$password = stripslashes($password);
$email = $conn->real_escape_string($email);
$password = $conn->real_escape_string($password);
//lettura tabella utenti2
$controllo = false;
$sql= "SELECT * FROM $tab_nome WHERE email='$email'";
$result= $conn->query($sql);
$conta = $result->num_rows;
if ($conta==1){
$row= $result->fetch_assoc();
$passc= $row['Password'];
if (password_verify($password,$passc)){
$controllo = true;
 }
}
if ($controllo){
session_start();
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
header("Location: loginok.php");
} else {
echo "Identificazione non riuscita: email o password errate <br>";
echo "Torna a pagina di <a href=\"login.html\">login</a>";
}
?>
