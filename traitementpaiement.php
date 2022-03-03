


<!DOCTYPE html> 
<html> <head> 
<link rel="stylesheet" href="style2.css" />
<meta charset="utf-8" />
  <title>  </title> 
 <link rel="stylesheet" href="styltraitement.css"/>
 </head>
 <body>
 
<?php
    if(($_POST["somme"]<10000 ) AND ($_POST["somme"]> 2000000))
	{
        echo "<strong>Veuiller saisire une somme compris entre 10000 et 2000000 </strong>";
		?>
<a href="index.php" title=" cliquer ici pour modifier la somme"> 
<strong>cliquer ici pour modifier la somme</strong></a>

<br/>
<?php
    }
    else
    {
       echo '<strong> <marquee>Votre inscription'." s'est".' bien terminé avec succès  </marquee><br/><br/><br/>
	   
<div align="center">
<br/><br/>
<img src="qrcode.png" alt="Photo de montage" title ="mon image préférée" width="200" />
<br/><br/>
<a class="index2php" href="index.php" title=" "> 
<strong>Terminer</strong></a>
</div></strong>';
    }
?>


 </body>
 </html>