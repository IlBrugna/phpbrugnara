<?php
 session_start();
 //elimina le variabili di sessione impostate
 $_SESSION = array();
 //elimina la sessione
 session_destroy();
 //echo "Disconnessione riuscita, arrivederci!"
 ?>
 <html> 
 <head> 
 <link rel="stylesheet" type="text/css" href="stile.css"> 
 </head>
 <body style="background-image: url('dogg.jpg'); vertical-align: middle; text-align:center;">
 <p class="myP">"Disconnessione riuscita, arrivederci!"</p>
 <form method="get" action="/login/login.html">
    <button type="submit">Torna al login</button>
</form>
</body>
</html>

