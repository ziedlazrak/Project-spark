<?PHP
include "../entities/cours.php";
include "../core/coursC.php";

if (isset($_POST['ref_cours']) and isset($_POST['dur_cours']) and isset($_POST['nom_coach']) and isset($_POST['dispo']))
{
$cours1=new cours($_POST['ref_cours'],$_POST['dur_cours'],$_POST['nom_coach'],$_POST['dispo']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
//$name= $_SESSION["nom"];
$name = $_COOKIE['currentusername'];

$cours1C=new coursC();
$cours1C->ajoutercours($cours1);
$cours1C->coursrecentactivity($name);

header('Location: affichercours.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>