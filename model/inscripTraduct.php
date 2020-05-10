<?php
include_once("../model/connexion_BDD.php");
include_once("../model/traducteur.class.php");

  

class Inscription{
 	public function inscripTraducteur(){  
      //Connection à la base de données
      $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
      $conn = $bdd->connexion('sitetraduction','localhost','root','');
	     // partie pour telecherger les fichiers
		 $targetDir = "C:/wamp64/uploads/";
		 if (isset($_FILES['files']) and isset($_FILES['ref'])) {
            $fileName = basename($_FILES["files"]["name"]);
            $fileref =  basename($_FILES["ref"]["name"]);
          }
        
         $targetFilePath = $targetDir . $fileName;
         $targetRefPath = $targetDir . $fileref;

         $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
         $refType = pathinfo($targetRefPath,PATHINFO_EXTENSION);
	  

		// si email n'existe ps et mdp valide
          if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['wilaya']) and isset($_POST['commune']) and isset($_POST['adresse'] )and isset($_POST['commune']) and isset($_POST['tlphn']) and isset($_POST['fax']) and $_POST['assermente'] and !empty($_FILES["files"]["name"]) and !empty($_FILES["ref"]["name"])){
         
            $allowTypes = array('jpg','png','jpeg','gif','pdf');
           
             if(in_array($fileType, $allowTypes)){
              if(move_uploaded_file($_FILES["files"]["tmp_name"], $targetFilePath) and move_uploaded_file($_FILES["ref"]["tmp_name"], $targetRefPath)){
             
              $user = new traducteur($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password'],$_POST['wilaya'],$_POST['commune'],$_POST['adresse'],$_POST['tlphn'],$_POST['fax'],$fileName,$_POST['assermente']);
         
              $query = " INSERT INTO traducteurs(nom,prenom,email,mdp,adresse,commune,wilaya,tlphn,fax,cv,assermente,ref) VALUES ('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['email']."',md5('".$_POST['password']."'),'".$_POST['wilaya']."','".$_POST['commune']."','".$_POST['adresse']."','".$_POST['tlphn']."','".$_POST['fax']."','".$fileName."','".$_POST['assermente']."','".$fileref."')";
              $conn->query($query);  
             }
             }
         
			//Ajout dans la table des clients
          }
}
public function getDataTraduct(){
        $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
        $conn = $bdd->connexion('sitetraduction','localhost','root','');

         $query = "SELECT * FROM traducteurs ";
         $resultat=$conn->query($query);       
         return $resultat;
}
public function insererLangue($row){
        $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
        $conn = $bdd->connexion('sitetraduction','localhost','root','');
        
        $query = "INSERT into maitriser(IDLangue, IDTrad) 
          SELECT langues.ID,traducteurs.IDTrad from langues JOIN traducteurs ON langue ='".$row."' AND email='".$_POST['email']."' ";
        $conn->query($query);
}
public function getLangue($id){
        $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
        $conn = $bdd->connexion('sitetraduction','localhost','root','');
       // $var = "SELECT IDtrad from traducteurs WHERE email='".$_POST['email']."' ";

         $query = "SELECT langues.langue FROM langues WHERE ID IN (SELECT IDLangue from maitriser WHERE IDtrad='".$id."')";
        
         $resultat=$conn->query($query);       
         return $resultat;
      }
      public function getDataTraducteur(){
      if(isset($_SESSION['email'])&& isset($_SESSION['mdp'])){

      //$bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
      //$conn = $bdd->connexion('sitetraduction','localhost','root','');
          try
           {
           $bdd = new PDO('mysql:host=localhost;dbname=sitetraduction', 'root', '');
           }
           catch(Exception $e)
           {
             die('Erreur : '.$e->getMessage());
           }
       
         $resultat=$bdd->query("SELECT * FROM traducteurs ");       
         return $resultat;
    }      
    }
}