<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/cours.php";
include "../core/coursC.php";
if (isset($_GET['ref_cours'])){
	$coursC=new coursC();
	$name=$_GET['ref_cours'];
    $result=$coursC->recuperercours($name);

	foreach($result as $row){
		$ref_cours=$row['ref_cours'];
		$dur_cours=$row['dur_cours'];
		$nom_coach=$row['nom_coach'];
		$dispo=$row['dispo'];

?>
<form method="POST">
<table>
<caption>Modifier cours</caption>
<tr>
<td>ref_cours</td>
<td><input type="number" name="ref_cours" value="<?PHP echo $ref_cours ?>"></td>
</tr>
<tr>
<td>dur_cours</td>
<td><input type="number" name="dur_cours" value="<?PHP echo $dur_cours ?>"></td>
</tr>
<tr>
<td>nom_coach</td>
<td><input type="text" name="nom_coach" value="<?PHP echo $nom_coach ?>"></td>
<td>dispo</td>
<td><input  type="radio" name="dispo" value="<?PHP echo $dispo ?>" >
              <label for="q0r6" style="z-index: 0;">disponible</label> 
              <input  id="check2" type="radio" name="dispo" value="<?PHP echo $dispo ?>">
              <label for="q0r7" style="z-index: 0;">annulé</label>
</tr>
<tr>
</tr>


<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="ref_cours_ini" value="<?PHP echo $_GET['ref_cours'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$cours=new cours($_POST['ref_cours'],$_POST['dur_cours'],$_POST['nom_coach'],$_POST['dispo']);
	$coursC->modifiercours($cours,$_POST['ref_cours_ini']);
	echo $_POST['ref_cours_ini'];
	header('Location: affichercours.php');
}
?>
</body>
</HTMl>