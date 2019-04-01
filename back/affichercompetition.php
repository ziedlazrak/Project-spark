<?PHP
include "../core/competitionC.php";
$competition1C=new competitionC();
$listecompetitions=$competition1C->affichercompetitions();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Nom</td>
<td>Nombre de Participants</td>
<td>Lieu</td>
<td>Date</td>
<td>Description</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP

foreach($listecompetitions as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['nbre']; ?></td>
	<td><?PHP echo $row['lieu']; ?></td>
	<td><?PHP echo $row['datec']; ?></td>
	<td><?PHP echo $row['descri']; ?></td>
	<td><form method="POST" action="supprimercompetition.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
	</form>
	</td>
	<td><a href="modifiercompetition.php?nom=<?PHP echo $row['nom']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


