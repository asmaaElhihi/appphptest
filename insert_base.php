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


<?php
//l'insertion 
$sql = 'INSERT INTO users VALUES ("", "test1", "test1")';


mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());

//fermeture de la connection
mysql_close();
?>
    
    </body>
</html>