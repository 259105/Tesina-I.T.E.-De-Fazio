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
				<h1>Modifica</h1>
      <form action="modificaa.php" method="get">
            <label>ID </label><?php $id= $_GET["id"]; echo "<input type=\"text\" name=\"id\"  value=$id readonly=\"readonly\" />" ?>
            <label>Ragione Sociale</label><?php $r_s= $_GET["r_s"]; echo "<input type=\"text\" name=\"r_s\"  value=\"$r_s\" maxlength=\"30\" />" ?>
            <label>Anno</label><?php $anno= $_GET["anno"]; echo "<input type=\"text\" name=\"anno\"  value=$anno />" ?>
            <table>
                <tr>
                    <td><label>Attivo Circolante</label></td>
                    <td><?php $ac= $_GET["ac"]; echo "<input type=\"text\" name=\"ac\"  value=$ac maxlength=\"15\" />" ?></td>
                    <td><label>Debiti a Breve</label></td>
                    <td><?php $db= $_GET["db"]; echo "<input type=\"text\" name=\"db\"  value=$db maxlength=\"15\" />" ?></td>
                </tr>
                <tr>
                    <td><label>Disponibilit&agrave;  Liquida</label></td>
                    <td><?php $dl= $_GET["dl"]; echo "<input type=\"text\" name=\"dl\"  value=$dl maxlength=\"15\" />" ?></td>
                    <td><label>Debiti a Medio/Lungo</label></td>
                    <td><?php $dc= $_GET["dc"]; echo "<input type=\"text\" name=\"dc\"  value=$dc maxlength=\"15\" />" ?></td>
                </tr>
                <tr>
                    <td><label>Disponibilit&agrave;  Finanziaria</label></td>
                    <td><?php $df= $_GET["df"]; echo "<input type=\"text\" name=\"df\"  value=$df maxlength=\"15\" />" ?></td>
                    <td><label>Capitale Proprio</label></td>
                    <td><?php $cp= $_GET["cp"]; echo "<input type=\"text\" name=\"cp\"  value=$cp maxlength=\"15\" />" ?></td>
                </tr>
                <tr>
                    <td><label>Totale Immobilizzazioni</label></td>
                    <td><?php $im= $_GET["im"]; echo "<input type=\"text\" name=\"im\"  value=$im maxlength=\"15\" />" ?></td>
                    <td><label>Reddito effettivo</label></td>
                    <td><?php $re= $_GET["re"]; echo "<input type=\"text\" name=\"re\"  value=$re maxlength=\"15\" />" ?></td>
                </tr>
                <tr>
                    <td><label>Ricavi di vendita</label></td>
                    <td><?php $rv= $_GET["rv"]; echo "<input type=\"text\" name=\"rv\"  value=$rv maxlength=\"15\" />" ?></td>
                    <td><label>Reddito Operativo</label></td>
                    <td><?php $ro= $_GET["ro"]; echo "<input type=\"text\" name=\"ro\"  value=$ro maxlength=\"15\" />" ?></td>
                </tr>
                <tr>
                    <td colspan="2"><label>Totale Impieghi</label></td>
                    <td colspan="2"><?php $ti= $_GET["ti"]; echo "<input type=\"text\" name=\"ti\"  value=$ti maxlength=\"15\" />" ?></td>
                </tr>
            </table>
            <input type="submit" value="Carica">
        </form><br>
		<a href="indexdb.html">Torna alla home</a> 
		<?php $id= $_GET["id"]; echo "<a href=\"query.php?id=$id\">Vai all'azienda</a>" ?>
 </div>
            </div>
        </div>

        <div id="footer">
            &copy; Michele Cerra 2018
        </div>
    </div>
</body>
</html>
