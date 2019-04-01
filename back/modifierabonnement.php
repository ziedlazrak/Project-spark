<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/abonnement.php";
include "../core/abonnementC.php";
if (isset($_GET['reference'])){
	$abonnementC=new abonnementC();
	$name=$_GET['reference'];
    $result=$abonnementC->recupererabonnement($name);

	foreach($result as $row){
		$reference=$row['reference'];
		$duree=$row['duree'];
		$prix=$row['prix'];
?>
<form method="POST">
<table>
<caption>Modifier abonnement</caption>
<tr>
<td>reference</td>
<td><input type="number" name="reference" value="<?PHP echo $reference ?>"></td>
</tr>
<tr>
<td>Duree</td>
<td><input type="text" name="duree" value="<?PHP echo $duree ?>"></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="text" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>


<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="reference_ini" value="<?PHP echo $_GET['reference'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$abonnement=new abonnement($_POST['reference'],$_POST['duree'],$_POST['prix']);
	$abonnementC->modifierabonnement($abonnement,$_POST['reference_ini']);
	echo $_POST['reference_ini'];
	header('Location: afficherabonnement.php');
}
?>
</body>
</HTMl>