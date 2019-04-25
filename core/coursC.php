<?PHP
include "../config.php";
class coursC {
function affichercours ($cours){
		echo "reference du cours: ".$cours->getref_cours()."<br>";
		echo "duree du cours: ".$cours->getdur_cours()."<br>";
		echo "nom du coach: ".$cours->getnom_coach()."<br>";
		echo "disponibilité du cours: ".$cours->getdispo()."<br>";
	}

	function ajoutercours($cours){
		$sql="insert into cours (ref_cours,dur_cours,nom_coach,dispo) values (:ref_cours,:dur_cours,:nom_coach,:dispo)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $ref_cours=$cours->getref_cours();
        $dur_cours=$cours->getdur_cours();
        $nom_coach=$cours->getnom_coach();
        $dispo=$cours->getdispo();

		$req->bindValue(':ref_cours',$ref_cours);
		$req->bindValue(':dur_cours',$dur_cours);
		$req->bindValue(':nom_coach',$nom_coach);
		$req->bindValue(':dispo',$dispo);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}


	function coursrecentactivity($username){
		
		$sql="insert into recentactivity (username,activity) values (:username,:activity)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$param_username=$username;
		$activity="a ajoute un nouveau cours";

		$req->bindValue(':username',$param_username);
		$req->bindValue(':activity',$activity);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}


	

	function affichercourss(){
		//$sql="SElECT * From competition e inner join formationphp.competition a on e.cin= a.cin";
		$sql="SElECT * From cours";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercours($ref_cours){
		$sql="DELETE FROM cours where ref_cours= :ref_cours";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ref_cours',$ref_cours);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifiercours($cours,$ref_cours){
		$sql="UPDATE cours SET ref_cours=:ref_course, dur_cours=:dur_cours,nom_coach=:nom_coach, dispo=:dispo WHERE ref_cours=:ref_cours";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$ref_course=$cours->getref_cours();
        $dur_cours=$cours->getdur_cours();
        $nom_coach=$cours->getnom_coach();
        $dispo=$cours->getdispo();


		$datas = array(':ref_course'=>$ref_course, ':dur_cours'=>$dur_cours, ':nom_coach'=>$nom_coach, ':dispo'=>$dispo);

		$req->bindValue(':ref_course',$ref_course);
		$req->bindValue(':ref_cours',$ref_cours);
		$req->bindValue(':dur_cours',$dur_cours);
		$req->bindValue(':nom_coach',$nom_coach);
		$req->bindValue(':dispo',$dispo);


		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recuperercours($ref_cours){

		$sql="SELECT * from cours where ref_cours=$ref_cours";
		$db = config::getConnexion();

		try{
			echo "please";
		$liste=$db->query($sql);
		return $liste;

		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*
	function rechercherListecompetitions($nom){
		$sql="SELECT * from competition where nom=$nom";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		try{

		$res=$db->query($sql);
		return $res;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
*/
}

?>