<?PHP
include "../core/coursC.php";
$coursC=new coursC();
if (isset($_POST["ref_cours"])){
	$coursC->supprimercours($_POST["ref_cours"]);
	header('Location: affichercours.php');
}

?>