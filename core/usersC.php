<?PHP
include "../config.php";
session_start();



class usersC {

function afficheruser ($users){
		echo "Id: ".$users->getid()."<br>";
		echo "Username: ".$users->getusername()."<br>";
		echo "Password: ".$users->getpassword()."<br>";
		echo "Created_at: ".$users->getcreatedat()."<br>";
        echo "Email: ".$users->getemail()."<br>";
        echo "Num: ".$users->getnum()."<br>";
        echo "Nom: ".$users->getnom()."<br>";
        echo "Prenom: ".$users->getprenom()."<br>";
        echo "Photo: ".$users->getphoto()."<br>";
	}

	function ajouteruser($users){
		$sql="insert into users (id,username,password,created_at,email,num,nom,prenom,photo) values (:id,:username,:password,:created_at,:email,:num,:nom,:prenom,:photo)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$users->getid();
        $username=$users->getusername();
        $password=$users->getpassword();
        $created_at=$users->getcreatedat();
        $email=$users->getemail();
        $num=$users->getnum();
        $nom=$users->getnom();
        $prenom=$users->getprenom();
        $photo=$users->getphoto();

		$req->bindValue(':id',$id);
		$req->bindValue(':username',$username);
		$req->bindValue(':password',$password);
		$req->bindValue(':created_at',$created_at);
        $req->bindValue(':email',$email);
        $req->bindValue(':num',$num);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':photo',$photo);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

    
	
	function afficherusers(){
		//$sql="SElECT * From competition e inner join formationphp.competition a on e.cin= a.cin";
		$sql="SELECT * From users";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


    function select1(){
        $sql="SELECT username From recentactivity where id=( SELECT max(id) FROM recentactivity) ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


        function select2(){
        $sql="SELECT username From recentactivity ORDER BY id DESC LIMIT 1 OFFSET 1 ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }



        function select3(){
        $sql="SELECT username From recentactivity ORDER BY id DESC LIMIT 1 OFFSET 2 ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }



        function select4(){
        $sql="SELECT username From recentactivity ORDER BY id DESC LIMIT 1 OFFSET 3 ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


    function selectact1(){
        $sql="SELECT activity From recentactivity where id=( SELECT max(id) FROM recentactivity) ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


        function selectact2(){
        $sql="SELECT activity From recentactivity ORDER BY id DESC LIMIT 1 OFFSET 1 ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }



        function selectact3(){
        $sql="SELECT activity From recentactivity ORDER BY id DESC LIMIT 1 OFFSET 2 ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }



        function selectact4(){
        $sql="SELECT activity From recentactivity ORDER BY id DESC LIMIT 1 OFFSET 3 ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


    function selectdate1(){
        $sql="SELECT created_at From recentactivity where id=( SELECT max(id) FROM recentactivity) ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }



    function selectdate2(){
        $sql="SELECT created_at From recentactivity ORDER BY id DESC LIMIT 1 OFFSET 1 ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }



    function selectdate3(){
        $sql="SELECT created_at From recentactivity ORDER BY id DESC LIMIT 1 OFFSET 2 ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }



    function selectdate4(){
        $sql="SELECT created_at From recentactivity ORDER BY id DESC LIMIT 1 OFFSET 3 ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }



    function selectstat1(){
        $sql="SELECT COUNT(DATE_FORMAT(created_at,'%d%m%y')) AS STUFF FROM users GROUP BY (DATE_FORMAT(created_at,'%d%m%y')) order by id DESC limit 1 OFFSET 10";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


    function selectstat2(){
        $sql="SELECT COUNT(DATE_FORMAT(created_at,'%d%m%y')) AS STUFF FROM users GROUP BY (DATE_FORMAT(created_at,'%d%m%y')) order by id DESC limit 1 OFFSET 9";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

        function selectstat3(){
        $sql="SELECT COUNT(DATE_FORMAT(created_at,'%d%m%y')) AS STUFF FROM users GROUP BY (DATE_FORMAT(created_at,'%d%m%y')) order by id DESC limit 1 OFFSET 8";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


        function selectstat4(){
        $sql="SELECT COUNT(DATE_FORMAT(created_at,'%d%m%y')) AS STUFF FROM users GROUP BY (DATE_FORMAT(created_at,'%d%m%y')) order by id DESC limit 1 OFFSET 7";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


        function selectstat5(){
        $sql="SELECT COUNT(DATE_FORMAT(created_at,'%d%m%y')) AS STUFF FROM users GROUP BY (DATE_FORMAT(created_at,'%d%m%y')) order by id DESC limit 1 OFFSET 6";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


        function selectstat6(){
        $sql="SELECT COUNT(DATE_FORMAT(created_at,'%d%m%y')) AS STUFF FROM users GROUP BY (DATE_FORMAT(created_at,'%d%m%y')) order by id DESC limit 1 OFFSET 5";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


        function selectstat7(){
        $sql="SELECT COUNT(DATE_FORMAT(created_at,'%d%m%y')) AS STUFF FROM users GROUP BY (DATE_FORMAT(created_at,'%d%m%y')) order by id DESC limit 1 OFFSET 4";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

        function selectstat8(){
        $sql="SELECT COUNT(DATE_FORMAT(created_at,'%d%m%y')) AS STUFF FROM users GROUP BY (DATE_FORMAT(created_at,'%d%m%y')) order by id DESC limit 1 OFFSET 3";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


        function selectstat9(){
        $sql="SELECT COUNT(DATE_FORMAT(created_at,'%d%m%y')) AS STUFF FROM users GROUP BY (DATE_FORMAT(created_at,'%d%m%y')) order by id DESC limit 1 OFFSET 2";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }



        function selectstat10(){
        $sql="SELECT COUNT(DATE_FORMAT(created_at,'%d%m%y')) AS STUFF FROM users GROUP BY (DATE_FORMAT(created_at,'%d%m%y')) order by id DESC limit 1 OFFSET 1";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


        function selectstat11(){
        $sql="SELECT COUNT(DATE_FORMAT(created_at,'%d%m%y')) AS STUFF FROM users GROUP BY (DATE_FORMAT(created_at,'%d%m%y')) order by id DESC limit 1";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


            function numbernotif($me){
        $sql="SELECT COUNT(id) AS NUM FROM notifications where (`status` = 'unread') and (name='".$me."')";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }








	function supprimeruser($id){
		$sql="DELETE FROM users where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


    function trieruserparid($id){
        $sql="SELECT * from users ORDER BY id DESC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



    function trieruserparcreatedat($created_at){
        $sql="SELECT * from users ORDER BY created_at DESC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function rechercheruser($username){
        $sql="SELECT * from produit where username=$username";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



	function modifieruser($users,$id){
		$sql="UPDATE users SET id=:ide, username=:username,password=:password,created_at=:created_at,email=:email,num:=num,nom:=nom,prenom:=prenom,photo:=photo WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$ide=$users->getid();
        $username=$users->getusername();
        $password=$users->getpassword();
        $created_at=$users->getcreatedat();
        $email=$users->getemail();
        $num=$users->getnum();
        $nom=$users->getnom();
        $prenom=$users->getprenom();
        $photo=$users->getphoto();

		$datas = array(':ide'=>$ide, ':username'=>$username, ':password'=>$password, ':created_at'=>$created_at, ':email'=>$email, ':num'=>$num, ':nom'=>$nom, ':prenom'=>$prenom,':photo'=>$photo);

		$req->bindValue(':ide',$ide);
		$req->bindValue(':id',$id);
		$req->bindValue(':username',$username);
		$req->bindValue(':password',$password);
		$req->bindValue(':created_at',$created_at);
        $req->bindValue(':email',$email);
        $req->bindValue(':num',$num);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':photo',$photo);


		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recupereruser($id){

		$sql="SELECT * from users where id=$id";
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



	function connexion($username,$password){

		$pdo=config::getConnexion();
        // Prepare a select statement
        $sql = "SELECT id, username, password,nom,prenom,email,photo FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Set parameters
            $param_username = trim($username);
            $stmt->bindValue(":username",$param_username);
           
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $nom = $row["nom"];
                        $prenom = $row["prenom"];
                        $email = $row["email"];
                        $photo = $row["photo"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                        	 unset($stmt);
                            // Password is correct, so start a new session
                                unset($pdo);
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username; 
                            $_SESSION["nom"] = $nom; 
                            $_SESSION["prenom"] = $prenom; 
                            $_SESSION["email"] = $email; 
                            $_SESSION["picture"] = $photo; 
                           return 0 ;
                        } else{
                        	 unset($stmt);
                            // Display an error message if password is not valid
                                unset($pdo);
                            return 1;
                        }
                    }
                } else{
                	 unset($stmt);
                        unset($pdo);
                    return 2;
                }
            } else{
            	 unset($stmt);
            	    unset($pdo);
            	return 3;
            } 
    }
	}




   
	function verifusername($username){

		$pdo=config::getConnexion();
		// Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
        	// Set parameters
            $param_username = trim($username);
            // Bind variables to the prepared statement as parameters
            $stmt->bindValue(":username", $param_username);            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                	return 1;
                } else{
                	return 0;
                    
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
	}



function verifemail($email){

        $pdo=config::getConnexion();
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = :email";
        
        if($stmt = $pdo->prepare($sql)){
            // Set parameters
            $param_email = trim($email);
            // Bind variables to the prepared statement as parameters
            $stmt->bindValue(":email", $param_email);            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    return 1;
                } else{
                    return 0;
                    
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }


function verifnum($num){

        $pdo=config::getConnexion();
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE num = :num";
        
        if($stmt = $pdo->prepare($sql)){
            // Set parameters
            $param_num = trim($num);
            // Bind variables to the prepared statement as parameters
            $stmt->bindValue(":num", $param_num);            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    return 1;
                } else{
                    return 0;
                    
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }




	function registeruser($username,$password,$email,$num,$nom,$prenom,$photo)
	{
		$pdo=config::getConnexion();
		        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password,email,num,nom,prenom,photo) VALUES (:username, :password, :email, :num, :nom, :prenom, :photo)";
         
        if($stmt = $pdo->prepare($sql)){
        	// Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_email = $email;
            $param_num = $num;
            $param_nom = $nom;
            $param_prenom = $prenom;
            $param_photo = $photo;

            // Bind variables to the prepared statement as parameters
            $stmt->bindValue(":username", $param_username);
            $stmt->bindValue(":password", $param_password);
            $stmt->bindValue(":email", $param_email);
            $stmt->bindValue(":num", $param_num);
            $stmt->bindValue(":nom", $param_nom);
            $stmt->bindValue(":prenom", $param_prenom);
            $stmt->bindValue(":photo", $param_photo);
            

            // Attempt to execute the prepared statement
            if($stmt->execute()){
            	return 0;
            } else{
            	return 1;
            }
        }
         
        // Close statement
        unset($stmt);
            // Close connection
  		  unset($pdo);
	}



	function resetpassword($new_password)
	{
		$pdo=config::getConnexion();
		// Prepare an update statement
        $sql = "UPDATE users SET password = :password WHERE id = :id";
        
        if($stmt = $pdo->prepare($sql)){
        	// Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];

            // Bind variables to the prepared statement as parameters
            $stmt->bindValue(":password", $param_password);
            $stmt->bindValue(":id", $param_id);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
            	return 0;
                exit();
            } else{
            	return 1;
            }
        }
        
        // Close statement
        unset($stmt);
	}



    function connexionparmail($email){

        $pdo=config::getConnexion();
        // Prepare a select statement
        $sql = "SELECT id, username,nom,prenom,email,photo FROM users WHERE email = :email";
        
        if($stmt = $pdo->prepare($sql)){
            // Set parameters
            $param_email = trim($email);
            $stmt->bindValue(":email",$email);
           
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $nom = $row["nom"];
                        $prenom = $row["prenom"];
                        $email = $row["email"];
                        $photo = $row["photo"];
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["nom"] = $nom; 
                            $_SESSION["prenom"] = $prenom;
                            $_SESSION["email"] = $email; 
                            $_SESSION["picture"] = $photo;   
                            unset($pdo);
                    }
                } else{
                     unset($stmt);
                        unset($pdo);
                    return 2;
                }
            }
    }
    }




    function connexionparnum($num){

        $pdo=config::getConnexion();
        // Prepare a select statement
        $sql = "SELECT id, username,nom,prenom,email,photo FROM users WHERE num = :num";
        
        if($stmt = $pdo->prepare($sql)){
            // Set parameters
            $param_num = trim($num);
            $stmt->bindValue(":num",$num);
           
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $nom = $row["nom"];
                        $prenom = $row["prenom"];
                        $email = $row["email"];
                        $photo = $row["photo"];
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username; 
                            $_SESSION["nom"] = $nom; 
                            $_SESSION["prenom"] = $prenom;  
                            $_SESSION["email"] = $email; 
                            $_SESSION["picture"] = $photo; 
                            unset($pdo);
                    }
                } else{
                     unset($stmt);
                        unset($pdo);
                    return 2;
                }
            }
    }
    }




	
}

?>