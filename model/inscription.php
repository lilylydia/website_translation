<?php
include_once("../model/connexion_BDD.php");
include_once("../model/client.class.php");

class Inscription{
	public function s_inscrire(){
		//Connection à la base de données
		$bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
		$conn = $bdd->connexion('sitetraduction','localhost','root','');
	    
	    // inscription d'un client 

	    /* Vérification de l'adresse e-mail si elle existe deja dans la bdd table (clients)  */
		
		$verifEmailReqP=$conn->prepare('SELECT * FROM clients WHERE  email=?');
		if(isset($_POST['email'])){
			$verifEmailReqP->execute(array($_POST['email']));
		}
		
		$verifEmailRes=$verifEmailReqP->fetch();
		
		$emailExist=false;

		if($verifEmailRes['IDclient']){
			$emailExist=true;
		}
        /* Vérification du mot de passe s'il existe deja dans la bdd table (clients)  */
		$passeErone=false;
		if(isset($_POST['password'])!=isset($_POST['password2'])){
			$passeErone=true;
		}
		//Si l'email existe dèja ou le mot de passe saisie la 2iem fois n'est pas le mm 
		if($emailExist||$passeErone){
			//redirection vers la page d'inscription
			header('Location:../view/index.php');
		}    
        /* Ajout d'un client dans la base de données  */	
		else{
		// si email n'existe ps et mdp valide
          if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['wilaya']) and isset($_POST['commune']) and isset($_POST['adresse'] )and isset($_POST['commune']) and isset($_POST['tlphn']) and isset($_POST['fax'])){
          
          	 $user = new client($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password'],$_POST['wilaya'],$_POST['commune'],$_POST['adresse'],$_POST['commune'],$_POST['tlphn'],$_POST['fax']);
			
			//Ajout dans la table des clients
           $query = " INSERT INTO clients(nom,prenom,email,mdp,wilaya,commune, adresse,num_tlphn,fax) VALUES ('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['email']."','".$_POST['password']."','".$_POST['wilaya']."','".$_POST['commune']."','".$_POST['adresse']."','".$_POST['tlphn']."','".$_POST['fax']."')";        
           $conn->query($query);  
         
          }
		}
}
 public function majDonneeClient(){
        $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
		$conn = $bdd->connexion('sitetraduction','localhost','root','');
   
        $targetDir = "C:/wamp64/uploads/";
        $fileName='';
		 if (isset($_FILES['profile'])) {
            $fileName = basename($_FILES["profile"]["name"]);
          }
        
        $targetFilePath = $targetDir . $fileName;

        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
     
         if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['wilaya']) and isset($_POST['commune']) and isset($_POST['adresse']) and isset($_POST['tlphn']) and isset($_POST['fax']) and !empty($_FILES["profile"]["name"])) {
  
            $allowTypes = array('pdf');
         	if(in_array($fileType, $allowTypes)){
         	if(move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFilePath)){
              
         	 $query = " UPDATE clients SET nom = '".$_POST['nom']."' , prenom = '".$_POST['prenom']."' , email='".$_POST['email']."' , mdp = '".$_POST['password']."' , wilaya='".$_POST['wilaya']."' , commune='".$_POST['commune']."' , adresse='".$_POST['adresse']."' , num_tlphn='".$_POST['tlphn']."', fax='".$_POST['fax']."',photo_proph='".$fileName."' WHERE email='".$_SESSION['email']."'" ; 
           $conn-> query($query);
         }
         }
         }
 }

 public function deconnexion(){
   session_start();
  // Réinitialisation du tableau de session
  // On le vide intégralement
  $_SESSION = array();
  // Destruction de la session
  session_destroy();
  // Destruction du tableau de session
  unset($_SESSION);
    
 }
}