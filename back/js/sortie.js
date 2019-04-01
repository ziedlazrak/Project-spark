function verif(){
	console.log("log");
	var nom = document.getElementById("nom").value;
	var nbre = document.getElementById("nbre").value;
	var lieu = document.getElementById("lieu").value;
	var prix = document.getElementById("prix").value;

	if((nom=="") || (nbre=="") || (lieu=="") || (prix==""))
	{
		swal("Veuillez verifier votre choix");
		return
	}
	if(nbre>=50){
		swal("Nombre de participants elevé");
		return
	}
	else{
		swal("sucées", "Sortie ajoutée", "success");
	}


}


nom
nbre
lieu
prix