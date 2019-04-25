<?PHP
class cours {
	private $ref_cours;
	private $dur_cours;
	private $nom_coach;
	private $dispo;

	function __construct($ref_cours,$dur_cours,$nom_coach,$dispo){
		$this->ref_cours=$ref_cours;
		$this->dur_cours=$dur_cours;
		$this->nom_coach=$nom_coach;
		$this->dispo=$dispo;

	}
	
	function getref_cours(){
		return $this->ref_cours;
	}
	function getdur_cours(){
		return $this->dur_cours;
	}
	function getnom_coach(){
		return $this->nom_coach;
	}
 	function getdispo(){
		return $this->dispo;
	}



	function setref_cours($ref_cours){
		$this->ref_cours=$ref_cours;
	}
	function setdur_cours($dur_cours){
		$this->dur_cours=$dur_cours;
	}
	function setnom_coach($nom_coach){
		$this->nom_coach=$nom_coach;
	}

	function setdispo($dispo){
		$this->dispo=$dispo;
	}

}

?>