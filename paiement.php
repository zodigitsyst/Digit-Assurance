<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="style2.css" />
<title>Paiement</title>
</head>
<body align="center">
<?php  ?>
<div class="pform">
<div class="formp"> Formulaire de paiement</div>
<div class="formulaire"><div class="sommep">
Somme a payé >= 10000F
<br/> Frais de transfert = 10%<br/>
Utiliser le code suivant: <br/>*144*3*5385766*montant#</div>
<form method="post" action="traitementpaiement.php">
<input type="number1" class="montant" name="somme" placeholder="montant:CFA " size="43" required><br/><br/>
<input type="number2" class="numero" placeholder="saisir le numero d'envoie " name="numero" size="43" 
title="saisir le numero d'envoie" required><br/><br/>
<input type="text" class="id" name="idtransfert" placeholder="saisir id du transfert" size="43" required><br/><br/>
<input type="submit"class="depos" value="effectuer" required>
</form>
</div>
</div>
<div class="bas3">

</div>
</body>
</html>