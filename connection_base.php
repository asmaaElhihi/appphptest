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

$sql = 'SELECT * FROM users ';

// We execute the query $sql or we show an error
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

?> 

<?php echo "les users sont :" ?><br />

<?php 

while ($data = mysql_fetch_array($req)) { 
	echo $data['nom']. ' '.$data['prenom'] ; 
}

// Free up the memory and close the connection
mysql_free_result ($req);
mysql_close ();

?>

    
    </body>
</html>