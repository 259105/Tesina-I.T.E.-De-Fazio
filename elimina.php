<?php
$id= $_GET["id"];
$nome_db= "indici";
$con= new mysqli("localhost","root","",$nome_db);
$q="DELETE from rielaborati WHERE id=$id;";
$query= $con->query($q);
if ($query) {
    echo "Eliminazione Effettuata";
} else {
    echo "Errore. Controlla la Query";
}
?><br/>
<a href="indexdb.html">Torna alla home</a>