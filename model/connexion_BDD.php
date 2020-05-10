<?php

class ConnexionBdd_model{

	private $dbname ;
	private $host ;
	private $user;
	private $password;
	function __construct($db,$h,$u,$pass){
      $this->dbname=$db;
      $this->host= $h;
      $this->user=$u;
      $this->password=$pass;
	}

	public function connexion($dbname,$host,$user,$password){
        $dsn= "mysql:dbname=$dbname;host=$host";
        try
           {
           $bdd = new PDO($dsn,$user, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ));
           }
           catch(Exception $e)
           {
             die('Erreur de conexion à la base de donnée'.$e->getMessage());
             exit();
           }
           return $bdd;
	}
	public function deconnexion(&$bdd){
		$bdd=null;
	}
    public function requete($c, $r){
    	return $c-> query($r);
    }
}
         