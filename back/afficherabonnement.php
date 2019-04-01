<?PHP
include "../core/abonnementC.php";
$abonnement1C=new abonnementC();
$listeabonnements=$abonnement1C->afficherabonnements();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Reference</td>
<td>Durée</td>
<td>Prix</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP

foreach($listeabonnements as $row){
	?>
	<tr>
	<td><?PHP echo $row['reference']; ?></td>
	<td><?PHP echo $row['duree']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><form method="POST" action="supprimerabonnement.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference">
	</form>
	</td>
	<td><a href="modifierabonnement.php?reference=<?PHP echo $row['reference']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


