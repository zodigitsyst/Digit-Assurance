


<!DOCTYPE html>
 <html>
 <head>
 <link rel="stylesheet" href="style.css" />
 <meta charset="utf-8" />
 <title> Digit-Assurance </title>
 </head>
 <body >
 
<div class="space">
<div class="inscrib3" align="center">
  <form method="post" action="traitement.php">
 <table class="tab2">
  <tr> <td colspan="2"> <div class="ou">Formulaire d'inscription</div></td> </tr> 
  <tr> <td>Nom <span class= "prenom">Prenom</span></td> <td><div class="sex">Sexe<br/></div></td></tr>
  <tr> <td><input type="text"name="Nom" 
placeholder="Ex nom de famille" required  maxlength="70"/><input type="textprenom"name="Prenom" 
placeholder="Ex Camille" required  maxlength="70"/></td>
 <td><select  class="s1" name="sex" >
<option value="tu es">Tu es</option>
<option value="homme">Homme</option>
<option value="femme">Femme</option></select> </td> </tr>
<tr> <td colspan="2">Date de naissance</td></tr>
<tr> <td colspan="2" ><?php
  // Variable qui ajoutera l'attribut selected de la liste déroulante
  $selected = '';
 
  // Parcours du tableau
  echo '<select name="jour">',"\n";
  for($i=1; $i<=31; $i++)
  {
    // L'année est-elle l'année courante ?
    if($i == date ('d'))
    {
      $selected = ' selected="selected"';
    }
    // Affichage de la ligne
    echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
    // Remise à zéro de $selected
    $selected='';
  }
  echo '</select>',"\n";
?>
<?php
$months = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre');
echo '<select name="mois">';
foreach ($months as $index => $name)
{
echo '<option value="' . ($index +1) . '"'; 
if ($index +1 == date('m')) echo ' selected="selected"';
echo ">$name</option>";
}
echo "</select> ";
?>
<?php
  // Variable qui ajoutera l'attribut selected de la liste déroulante
  $selected = '';
 
  // Parcours du tableau
  echo ' <select name="annees">',"\n";
  for($i=1940; $i<=2030; $i++)
  {
    // L'année est-elle l'année courante ?
    if($i == date('Y'))
    {
      $selected = ' selected="selected"';
    }
    // Affichage de la ligne
    echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
    // Remise à zéro de $selected
    $selected='';
  }
  echo '</select>',"\n";
?></td></tr>
<tr> <td>Pays <span class="ville">Ville</span></td><td><div class="ici">Sociétés d'assurance </div></td></tr>
<tr> <td><input type="pays"name="pseudo" 
placeholder="Ex Paris" required  maxlength="21"/><input type="ville"name="pseudo" 
placeholder="Ex Paris" required  maxlength="21"/></td><td><select  class="s5" name="sex" >
<option value="tu es">Choisissez </option>
<option value="homme">Coris Assurance</option>
<option value="homme">UAB Assurance</option>
<option value="homme">SONAR Assurance</option>
<option value="homme">SUNU Assurance</option>
<option value="homme">Generale Assurance</option>
<option value="femme">Sanlam Assurance</option></select></td></tr>

<tr> <td>CNIB <span class="ville">Permis</span></td><td><div class="ici">Type d'Assurance </div></td></tr>
 <tr> <td><input type="text"name="Nom" 
placeholder="Bxxxxx" required  maxlength="70"/><input type="textprenom"name="Prenom" 
placeholder="N°xxxx" required  maxlength="70"/></td>
 <td>
 <select  class="s5" name="sex" >
<option value="tu es">Choisissez </option>
<option value="homme">Assurance Vie</option>
<option value="homme">Assurance Auto</option>
<option value="femme">Assurance Moto</option></select> </td> </tr>

<tr> <td>Tel1 <span class="ville">Tel2</span></td><td><div class="ici">Tel Cas de besoin </div></td></tr>
 <tr> <td><input type="text"name="Nom" 
placeholder="7xxxxxxx" required  maxlength="70"/><input type="textprenom"name="Prenom" 
placeholder="7xxxxxxx" required  maxlength="70"/></td>
 <td><input type="textpreno" class="cartvisite" name="Prenom" 
placeholder="7xxxxxxx" required  maxlength="70"/> </td> </tr>

<tr> <td colspan="2"> Adresse E-Mail  </td> </tr> 
<tr> <td colspan="2"> <input type="email"name="pseudo" 
placeholder="Ex abz@gmail.com" required  maxlength="70"/> </td> </tr> 
<tr> <td colspan="2"> Mot de passe </td> </tr> 
<tr> <td colspan="2"> <input type="password"name="pseudo" 
placeholder="Min 8 caractère" required  maxlength="21"/> </td> </tr> 
<tr> <td colspan="2"> Confirmer </td> </tr> 
<tr> <td colspan="2"> <input type="password"name="pseudo" 
placeholder="Min 8 caractère" required  maxlength="21"/> </td> </tr>
<tr> <td colspan="2"><input class="inp2" type="submit" value="Inscris-toi"/>  </td> </tr> 
<tr> <td colspan="2">  <span class="cliquer"> En cliquant sur "inscris-toi"
  tu declares accepter nos conditions d'utilisation et notre declaration de confidentialité
ainsi que notre charte d'utilisation de cookies. Tu accepte également recevoir des notifcations par E-Mail
(option désactivable a tout moment).</span> </td> </tr> 

</table>
 </form>
 </div>
  </div>

 </body>
 </html>
