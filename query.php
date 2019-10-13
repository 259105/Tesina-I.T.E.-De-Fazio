<!DOCTYPE html>
<html>
<head>
    <title>Calcolatore indici</title>
    <link rel="icon" href="icon.ico" />
    <link href="stile.css" rel="stylesheet" type="text/css" media="all">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet"> 
    <meta charset="UTF-8">
</head>
<body leftmargin="0" topmargin="0">
    <div align="center">
        <div class="sfondo-superiore bgsfondoindici">
            <div class="header">
                <ul id="nav">
                    <li><a href="index.html">HOME</a></li>
                    <li>
                        <a class="attivo" href="#" title="argomenti">ARGOMENTI</a>
                        <ul>
                            <li><a href="guerra.html">Guerra di Corea</a></li>
                            <li><a href="quasimodo.html">"Uomo del mio tempo"</a></li>
                            <li><a href="istituzioni.html">Differenze istituzionali</a></li>
                            <li><a href="diritti_umani.html">Diritti umani</a></li>
							<li><a href="mate.html">I Vincoli</a></li>
                            <li><a href="sistema_economico.html">Capitalismo Autoritario</a></li>
                            <li><a href="info.html">L'intranet Nord Coreano</a></li>
                            <li><a href="azienda.html">Samsung</a></li>
                            <li><a href="inglese.html">Korea Exchage</a></li>
							<li><a class="attivo" href="indexdb.html">Calcolatore Indici</a></li>
                        </ul>
                    </li>
                    <li><a href="corea.html" title="corea">PERCH&Eacute;?</a></li>
                </ul>
            </div>
            <div id="title">
                <hr>
                <h1><a href="index.html">TESINA | MICHELE CERRA</a></h1>
            </div>
            <h2>Calcolatore indici di bilancio</h2>
        </div>
        <div id="body">
            <div id="aside">
                <ul>
                    <li><a href="guerra.html">Guerra di Corea</a></li>
                    <li><a href="quasimodo.html">"Uomo del mio tempo"</a></li>
                    <li><a href="istituzioni.html">Differenze istituzionali</a></li>
                    <li><a href="diritti_umani.html">Diritti umani</a></li>
					<li><a href="mate.html">I Vincoli</a></li>
                    <li><a href="sistema_economico.html">Capitalismo Autoritario</a></li>
                    <li><a href="info.html">L'intranet Nord Coreano</a></li>
                    <li><a href="azienda.html">Samsung</a></li>
                    <li><a href="inglese.html">Korea Exchage</a></li>
					<li><a class="attivo" href="indexdb.html">Calcolatore Indici</a></li>
                </ul>
            </div>
            <div id="section">
			<br /><div id="form">
			
	<?php
		$id= $_GET["id"];
                if ($id != "" && $id !=" Inserisci ID"){
                    echo "<h1>Risultati</h1>";
		$nome_db= "indici";
		$con= new mysqli("localhost","root","",$nome_db); //connessione al database non modificare mai
		
		$q= "	SELECT * 
				FROM rielaborati
                                WHERE id=$id
				;";
		
		$query= $con->query($q);
                $num_risultati= $query->num_rows;
                if ($num_risultati>0) {
                $riga= $query->fetch_assoc();
			
			$id= $riga["id"];
                        $r_s= $riga["r_s"];
                        $anno= $riga["anno"];
                        $ac= $riga["ac"];
                        $dl= $riga["dl"];
                        $df= $riga["df"];
                        $im= $riga["im"];
                        $db= $riga["db"];
                        $dc= $riga["dc"];
                        $cp= $riga["cp"];
                        $re= $riga["re"];
                        $ro= $riga["ro"];
                        $rv= $riga["rv"];
                        $ti= $riga["ti"];
						$acm = number_format($ac, 0, ',', '.');
						$dlm = number_format($dl, 0, ',', '.');
						$dfm = number_format($df, 0, ',', '.');
						$imm = number_format($im, 0, ',', '.');
						$dbm = number_format($db, 0, ',', '.');
						$dcm = number_format($dc, 0, ',', '.');
						$cpm = number_format($cp, 0, ',', '.');
						$rem = number_format($re, 0, ',', '.');
						$rom = number_format($ro, 0, ',', '.');
						$rvm = number_format($rv, 0, ',', '.');
						$tim = number_format($ti, 0, ',', '.');
		echo "            <label>ID: </label><td><b>$id</b></td>
            <label>Ragione Sociale: </label><td><b>$r_s</b></td>
            <label>Anno: </label><td><b>$anno</b></td>
            <table border=\"2\">
                <tr>
                    <td><label>Attivo Circolante</label></td>
                    <td>$acm</td>
                    <td><label>Debiti a Breve</label></td>
                    <td>$dbm</td>
                </tr>
                <tr>
                    <td><label>Disponibilit&agrave; Liquida</label></td>
                    <td>$dlm</td>
                    <td><label>Debiti a Medio/Lungo</label></td>
                    <td>$dcm</td>
                </tr>
                <tr>
                    <td><label>Disponibilit&agrave; Finanziaria</label></td>
                    <td>$dfm</td>
                    <td><label>Capitale Proprio</label></td>
                    <td>$cpm</td>
                </tr>
                <tr>
                    <td><label>Totale Immobilizzazioni</label></td>
                    <td>$imm</td>
                    <td><label>Reddito effettivo</label></td>
                    <td>$rem</td>
                </tr>
                <tr>
                    <td><label>Ricavi di vendita</label></td>
                    <td>$rvm</td>
                    <td><label>Reddito Operativo</label></td>
                    <td>$rom</td>
                </tr>
                <tr>
                    <td colspan=2><label>Totale Impieghi</label></td>
                    <td colspan=2>$tim</td>
                </tr>
            </table> <br/> <br/>";
                
                $q= " SELECT round((re/cp*100),2) , round((ro/ti*100),2), round((ro/rv*100),2), round((rv/ti),2), round((ti/cp),2) , round((re/ro),2)
FROM rielaborati
WHERE id=$id;";
                $query= $con->query($q);

                echo "<table border=\"2\">
                        <tr>
                            <td>ROE</td>
                            <td>ROI</td>
                            <td>ROS</td>
                            <td>Rotazione degli impieghi</td>
                            <td>Leverage</td>
                            <td>Incidenza gestione non caratteristica</td>
                            </tr>
                        ";
			$riga= $query->fetch_assoc();
			
			$ROE= $riga["round((re/cp*100),2)"];
                        $ROI= $riga["round((ro/ti*100),2)"];
                        $ROS= $riga["round((ro/rv*100),2)"];
                        $ROT= $riga["round((rv/ti),2)"];
                        $LV= $riga["round((ti/cp),2)"];
                        $IN= $riga["round((re/ro),2)"];
			
			echo "	<tr>
						<td>$ROE</td>
						<td>$ROI</td>
                                                <td>$ROS</td>
                                                <td>$ROT</td>
                                                <td>$LV</td>
                                                <td>$IN</td>
					</tr>";
			
		
		echo "</table> <br/><br/>
                
                <a href=\"modifica.php?id=$id&r_s=$r_s&anno=$anno&ac=$ac&dl=$dl&df=$df&im=$im&db=$db&dc=$dc&cp=$cp&re=$re&ro=$ro&rv=$rv&ti=$ti\">Modifica</a>
                
                <a href=\"elimina.php?id=$id\">Elimina</a>
                <br/><br/>";
                }else {echo "ID non presente nel Database";} }  else {echo "<h1>Errore inserisci dei valori!</h1>";}

	?>
        <br/>
	<a href="indexdb.html">Torna alla home</a>
	
</div>
            </div>

        <div id="footer">
            &copy; Michele Cerra 2018
        </div>
    </div>
</body>
</html>