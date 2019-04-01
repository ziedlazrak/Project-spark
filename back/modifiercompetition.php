<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/competition.php";
include "../core/competitionC.php";
if (isset($_GET['nom'])){
	$competitionC=new competitionC();
	echo "hello"."<br>";
	$name=$_GET['nom'];
	echo $name."<br>";
    $result=$competitionC->recuperercompetition($name);

	foreach($result as $row){
		$nom=$row['nom'];
		$nbre=$row['nbre'];
		$lieu=$row['lieu'];
		$datec=$row['datec'];
		$descri=$row['descri'];
?>
<form method="POST">
<table>
<caption>Modifier Competition</caption>
<tr>
<td>Nom</td>
<td><input type="number" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Nombre des Participants</td>
<td><input type="text" name="nbre" value="<?PHP echo $nbre ?>"></td>
</tr>
<tr>
<td>Lieu</td>
<td><input type="text" name="lieu" value="<?PHP echo $lieu ?>"></td>
</tr>
<tr>
<td>Date</td>
<td><input type="number" name="datec" value="<?PHP echo $datec ?>"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" name="descri" value="<?PHP echo $descri ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="nom_ini" value="<?PHP echo $_GET['nom'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$competition=new competition($_POST['nom'],$_POST['nbre'],$_POST['lieu'],$_POST['datec'],$_POST['descri']);
	$competitionC->modifiercompetition($competition,$_POST['nom_ini']);
	echo $_POST['nom_ini'];
	header('Location: affichercompetition.php');
}
?>
</body>
</HTMl>