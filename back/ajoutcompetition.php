<?PHP
include "../entities/competition.php";
include "../core/competitionC.php";

if (isset($_POST['nom']) and isset($_POST['nbre']) and isset($_POST['lieu']) and isset($_POST['datec']) and isset($_POST['descri']))
{
$competition1=new competition($_POST['nom'],$_POST['nbre'],$_POST['lieu'],$_POST['datec'],$_POST['descri']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$competition1C=new competitionC();
$competition1C->ajoutercompetition($competition1);

header('Location: affichercompetition.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>