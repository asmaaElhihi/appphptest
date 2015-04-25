<!DOCTYPE html>
<?php $link = mysql_connect("localhost","root","") or die ("Impossible de se connecter:".mysql_error());
    echo 'Connexion reussie';

mysql_select_db ('testzac', $link) ;
    ?>
<html>
    <head>
        <title>Mon site</title>
    </head>
 
    <body>
<?php //you read about git? not yet :/ okay we will see some of it now ?>
<?php // Only when the form submitted, we show to the user a message telling him what happened. 
if(isset($_POST['submit'])) {
	echo "<br><br>User added ! Please refresh the page :D";
}
 ?>

<form method="POST" action="insert_html_base.php">
  Nom: <input type="text" name="nom"><br>
  Prenom: <input type="text" name="prenom"><br>
  <input type="submit" value="Submit" name ="submit">
</form>

<?php // remarque que zedt ORDER BY id DESC comme ca jdad ibano lfo9 blama nazlo n9elbo 3lihum a chaque fois  ?>
<?php $sql='select * from users ORDER BY id DESC'; ?>
<?php $req= mysql_query($sql); ?>

  <?php while ($data=mysql_fetch_array($req)) {
  	echo "<br>";
    echo "User ID : ".$data['id']."<br>";
    echo "Nom : ".$data['nom']."<br>";
    echo "Prénom : ".$data['prenom']."<br>";
    echo "---------------------------------"."<br>";
   } ?>

<?php
//l'insertion . utiliser $_POST pour recevoir les données depuis le formulaire.

// isset means "is set" en anglais si une valeur est affecté l had la valeur.. dans notre cas on vérifie $POST if it's set. welcome back :D thanks go and try now to add a user :D 
// I added name="submit" f button bach htahua imchi $_POST comme ca tu sera precise bach la kanu bazaf dial les posts maytkherb9ouch

if(isset($_POST['submit'])) {
	echo "User added ! Please refresh the page :D";
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$sql = "INSERT INTO users(nom,prenom) VALUES ('".$nom."', '".$prenom."')";
	mysql_query($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
}


//fermeture de la connection
  mysql_free_result($req); 
mysql_close();
?>
    
    </body>
</html>