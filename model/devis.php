<?php
include_once("../model/connexion_BDD.php");
include_once("../model/client.class.php");

class Devis{

	public function envoiDevis(){
  

		//Connection à la base de données
      $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
      $conn = $bdd->connexion('sitetraduction','localhost','root','');
  
	     // partie pour telecherger le document à traduire
		 $targetDir = "C:/wamp64/uploads/";
		
		 if (isset($_FILES['files']) ) {
		 
            $fileName = basename($_FILES["files"]["name"]);
          }
        
         $targetFilePath = $targetDir . $fileName;

         $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);	  
        echo $_SESSION['email'];
		// si email n'existe ps et mdp valide
            if(isset($_SESSION['email'])){
            $allowTypes = array('pdf');

             if(in_array($fileType, $allowTypes)){
  
              if(move_uploaded_file($_FILES["files"]["tmp_name"], $targetFilePath) ){
                
              date_default_timezone_set('Europe/Paris');
              $var="SELECT IDclient FROM clients WHERE email= '".$_SESSION['email']."' ";
              $res=$conn->query($var);
                
             foreach ($res as $row) {

              $query = " INSERT INTO devis(langue,commentaire,assermente,date_envoi,document,idclient,devis,languesrc,type) VALUES ('".$_POST['langue']."','".$_POST['commentaire']."','".$_POST['assermente']."','".date('d-m-y h:i:s')."','".$fileName."', '".$row['IDclient']."','".$_POST['exampleRadios']."','".$_POST['languesource']."','".$_POST['typetrad']."')";
              $conn->query($query); 
              $stmt = $conn->query("SELECT LAST_INSERT_ID()");
              $lastId = $stmt->fetchColumn();
              return $lastId;
              } 
             }
             }
                }
           
}
public function recupererDevis(){
  $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
        $conn = $bdd->connexion('sitetraduction','localhost','root','');

         $query = "SELECT * FROM devis";
         $resultat=$conn->query($query);       
         return $resultat;
}

}