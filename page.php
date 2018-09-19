<!DOCTYPE html>
<?
 include("page.css");
 include("page.html");
 $bdd = new PDO('mysql:host=localhost;dbname=quiz;charset=utf8', 'root', '');
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="content-language" content="fr" />
<? print"<title>$titre</title>"; ?>
<link type="text/css" rel="stylesheet" href="page.css" />
</head>
<body>
<?
if (isset($entete)) {
	print"<div class=\"entete\">";
	include ("$entete");
	print"</div>";
}
?>
<div class="quizz">
<div class="titre">
	<? print "\t".$titre."\n"; ?>
</div>
<?
extract ($_POST);
if (!isset($result)) {
	print "<form action=\"$PHP_SELF\" method=\"post\">";
	for ($i=0; $i<count($quizz); $i++) {
		$nom="_".$i;
		print "\n<div class=\"question\">\n";
		print "\t".$quizz[$i][0]."\n";
		print "</div>\n<div class=\"propositions\">\n";
     		for ($j=1; $j<count($quizz[$i])-2; $j++) {
			$quest=$quizz[$i][$j];
	  		print "\t<input type=\"radio\" name=\"$nom\" value=\"$j\" />$quest<br />\n";
     		}
		print "</div>";
     		print "<br />";
	}
	print "<input type=\"hidden\" name=\"result\" value=\"voir\" />\n";
	print "<input type=\"submit\" class=\"bouton\" value=\"Valider\" /><br />\n</form>";
}
else {
	print "<div class=\"resultats\">R&eacute;sultats du quizz</div>";
	$points=0;
	for($i=0; $i<count($quizz); $i++) {
		$nom="_".$i;
		print "\n<div class=\"question\">\n";
		print "\t".$quizz[$i][0]."\n</div>\n";
		$numero_bonne=$quizz[$i][count($quizz[$i])-2]; /* avant-derni�re valeur du tableau */
        	$bonne=$quizz[$i][$numero_bonne]; /* Bonne r�ponse */
		print "<div class=\"verif\">";
		if ($$nom==$numero_bonne) {
			print "Votre r&eacute;ponse <b><i>".$bonne."</i></b> est exacte";
			$points++;
		}
		else {
			print "La bonne r&eacute;ponse est <b>$bonne</b> mais vous ";
			if ($$nom=="") {
				print"n'avez rien r&eacute;pondu";
			}
			else {
				print"avez r&eacute;pondu <b>".$quizz[$i][$$nom]."</b>";
			}
		}
		print "</div>";
		$commentaire=$quizz[$i][count($quizz[$i])-1];
		if ($commentaire!=NULL) print "\n<div class=\"commentaire\">$commentaire</div>";
	//print"<br /><br />\n";
	$nom++;
	}
	if($points==count($quizz)) {
		print"<div class=\"felicitations\">F&eacute;licitations vous avez tout juste</div>\n";
	}
	else {
	  print "<div class=\"points\">Vous avez marqu� $points point";
		  if ($points>1) print "s";
	  print " sur ".count($quizz)."</div>\n";
	}
}
?>
</div>
<?
if (isset($pied)) {
	print"<div class=\"pied\">";
	include ("$pied");
	print"</div>";
}
?>
</body>
</html>
