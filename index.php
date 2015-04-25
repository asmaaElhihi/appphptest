<!--balise html-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
 
    <body>
 
    <!-- L'en-tête -->
    
    <header>
       
    </header>
    
    <!-- Le menu -->
    
    <nav id="menu">        
        <div class="element_menu">
            <h3>Titre menu</h3>
            <ul>
                <li><a href="page1.html">Lien</a></li>
                <li><a href="page2.html">Lien</a></li>
                <li><a href="page3.html">Lien</a></li>
            </ul>
        </div>    
    </nav>
    
    <!-- Le corps -->
    <!-- si le contenu c le seul qui change d'une page a l'autres alors on vas mettre nos contenus dans des page
    differentes et quand on veux l'appelé en fais <?php include("corps.php"); ?> -->
    
    <div id="corps">
        <h1>Mon super site</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
    </div>
    
    <!-- Le pied de page -->
    
    <footer id="pied_de_page">
        <p>Copyright moi, tous droits réservés</p>
    </footer>
    
    </body>
</html>

<!-- les variable -->
<?php $name ='asmaa'; ?>
<?php $age = 21; ?>
<?php echo $age; ?>
<?php  echo 'j\'ai ' . $age . ' ans';?>
<?php  echo "j'ai $age ans";?>

<?php $nombre = 10; $resultat = ($nombre + 5) * $nombre;  // $resultat prend la valeur 150 ?>

<!-- les condition -->
<!-- c simple comme les autres langage-->
<?php 
if($age == 21)
{ echo "bonjour asmaa";}
else
{ echo "t qui toi";}
?>

<?php
$note = 10;
switch ($note) // on indique sur quelle variable on travaille
{   case 0:  echo "Tu es vraiment un gros nul !!!";
    break;
    case 5:  echo "Tu es très mauvais";
    break;
    default: echo "Désolé";
}?>

<!-- les boucles -->
<?php
while ($continuer_boucle == true)
{
    // instructions à exécuter dans la boucle
}
?>

<?php
for ($i = 1; $i <= 100; $i++)
{
    echo 'Ceci est la ligne n°' . $i . '<br />';
}
?>

<!-- fonction-->
<?php
$ma_variable = str_replace('b', 'p', 'bim bam boum');
 
echo $ma_variable;
?>

<?php
function DireBonjour($nom)
{
    echo 'Bonjour ' . $nom . ' !<br />';
}

DireBonjour('asmaa');
DireBonjour('Père Noël');
?>
<!-- les tableaux -->
<?php
// La fonction array permet de créer un array
$prenoms = array ('asmaa', 'douaa');
?>
<?php 
$prenom[]='asmaa';
$prenom[]='douaa';
?>


<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $element)
{
    echo $element . '<br />';
}
?>
