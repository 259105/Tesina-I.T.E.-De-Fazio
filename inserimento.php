<?php
	$r_s= $_GET["r_s"];
        $anno= $_GET["anno"];
	$ac= $_GET["ac"];
        $dl= $_GET["dl"];
	$df= $_GET["df"];
        $im= $_GET["im"];
	$db= $_GET["db"];
        $dc= $_GET["dc"];
	$cp= $_GET["cp"];
        $re= $_GET["re"];
	$ro= $_GET["ro"];
        $rv= $_GET["rv"];
	$ti= $_GET["ti"];
	$valuta= $_GET["valuta"];
	$val= 1295.8;
	if ($valuta != "" && $r_s != "" && $anno != "" && $ac != "" && $dl != "" && $df != "" && $im != "" && $db != "" && $dc != "" && $cp != "" && $re != "" && $ro != "" && $rv != "" && $ti != "" ) {
		$nome_db= "indici";
		$con= new mysqli("localhost","root","",$nome_db); //connessione al database non modificare mail
                
                $numid="select *
                from rielaborati;";
                $query= $con->query($numid);
		
		$numid= $query->num_rows;
                $numid=$numid  + 1;
		
		if ($valuta =="won") {
			$ac=$ac /  $val ;
			$dl=$dl /  $val ;
			$df=$df /  $val ;
			$im=$im /  $val ;
			$db=$db /  $val ;
			$dc=$dc /  $val ;
			$cp=$cp /  $val ;
			$re=$re /  $val ;
			$ro=$ro /  $val ;
			$rv=$rv /  $val ;
			$ti=$ti /  $val ;
		}
		$q= "INSERT INTO rielaborati SET id=\"$numid\", r_s=\"$r_s\", anno=\"$anno\", ac=\"$ac\", dl=\"$dl\", df=\"$df\", im=\"$im\", db=\"$db\", dc=\"$dc\", cp=\"$cp\", re=\"$re\", ro=\"$ro\", rv=\"$rv\", ti=\"$ti\" ;";
		
		$query= $con->query($q);//per inviare comandi al server mysql è query che ha come argomento la stringa contenente il risultato della query
		
		if ($query) {
			echo "Benissimo hai inserito correttamente. L'id è $numid";
		}
		else {
			echo "Errore. Controlla la query";
		}
	}
	else {
		echo "<h1>Errore inserisci dei valori validi</h1>";
	}
?><br/>
<a href="indexdb.html">Torna alla home</a>