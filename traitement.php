



<!DOCTYPE html> 
<html> <head> 
<link rel="stylesheet" href="style2.css" />
<meta charset="utf-8" />
 
 <title>  </title> 
 <link rel="stylesheet" href="styltraitement.css"/>
 </head>
 <body>
<?php
    if(($_POST["jour"]> 29) AND ($_POST["mois"] == 2) 
	or ($_POST["jour"]> 30) AND ($_POST["mois"] == 4) 
	or ($_POST["jour"]> 30) AND ($_POST["mois"] == 6) 
	or ($_POST["jour"]> 30) AND ($_POST["mois"] == 9)
	or ($_POST["jour"]> 30) AND ($_POST["mois"] == 11 )
	or ($_POST["annees"]> 2003)){
        echo "<strong>Veuiller saisire une date valide</strong>";
		?>
<a href="index.php" title=" cliquer ici pour modifier la date"> 
<strong>cliquer ici pour modifier la date</strong></a>

<br/>
<?php
    }
    else
    {
       echo '<strong> <marquee>Vos infomations on bien été enregistré  </marquee><br/><br/><br/><br/><br/>
<div align="center">
<a class="index2php" href="paiement.php" title=" "> 
<strong>continuer</strong></a>
</div></strong>';
    }
?>


 </body>
 </html>
 
