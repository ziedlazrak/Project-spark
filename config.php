<?php
session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("699129467643-vtudjc3qejbcsq4uteh4scri2f67iieg.apps.googleusercontent.com");
	$gClient->setClientSecret("93rlVMBRVBnqezjXnPLg64X0");
	$gClient->setApplicationName("Login Tutorial");
	$gClient->setRedirectUri("http://localhost/AtelierPHP/NEW/views/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

	  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=try', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }
?>
