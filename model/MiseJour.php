<?php
include_once("../model/connexion_BDD.php");

class MAJ{
public function getData(){
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
         $resultat=$bdd->query("SELECT * FROM clients WHERE email='".$_SESSION['email']."' ");       
         return $resultat;
		}      
}
public function bloquerTrad(){
      $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
      $conn = $bdd->connexion('sitetraduction','localhost','root','');
      if(isset($_POST['email'])){

        $query =" UPDATE traducteurs SET bloqué ='oui' WHERE email='".$_POST['email']."'";       
        $conn->query($query);
      }   
}
public function debloquerTrad(){
      $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
      $conn = $bdd->connexion('sitetraduction','localhost','root','');
         
      if(isset($_POST['email'])){
        
        $query =" UPDATE traducteurs SET bloqué ='non' WHERE email='".$_POST['email']."'";       
        $conn->query($query);
      }   
}
public function supprimerTrad(){
      $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
      $conn = $bdd->connexion('sitetraduction','localhost','root','');
         
      if(isset($_POST['email'])){
        
        $query =" UPDATE traducteurs SET supprimé ='oui' WHERE email='".$_POST['email']."'";       
        $conn->query($query);
      }   
}

 public function bloquerClient(){
  $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
      $conn = $bdd->connexion('sitetraduction','localhost','root','');
      if(isset($_POST['email'])){

        $query =" UPDATE clients SET bloqué ='oui' WHERE email='".$_POST['email']."'";       
        $conn->query($query);

 }
}
public function debloquerClient(){
      $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
      $conn = $bdd->connexion('sitetraduction','localhost','root','');
         
      if(isset($_POST['email'])){
        
        $query =" UPDATE clients SET bloqué ='non' WHERE email='".$_POST['email']."'";       
        $conn->query($query);
      }  

}
public function supprimerclient(){
       $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
       $conn = $bdd->connexion('sitetraduction','localhost','root','');
         
       if(isset($_POST['email'])){ 
        $query =" UPDATE clients SET supprimé ='oui' WHERE email='".$_POST['email']."'";       
        $conn->query($query);
      }   
}
public function supprimerdocument(){
       $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
       $conn = $bdd->connexion('sitetraduction','localhost','root','');
    
       if(isset($_POST['iddoc'])){
         $query =" UPDATE devis SET supprimé ='oui' WHERE id='".$_POST['iddoc']."'";       
         $conn->query($query); 
      }        
}
public function recupreretrad($id){
         $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
         $conn = $bdd->connexion('sitetraduction','localhost','root','');

         $query = "SELECT nom,prenom FROM traducteurs WHERE IDtrad IN (SELECT idTraducteur from devis WHERE IDtrad='".$id."')"; 
         $resultat=$conn->query($query);       
         return $resultat;
}
public function recuprereClient($id){
        $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
        $conn = $bdd->connexion('sitetraduction','localhost','root','');

         $query = "SELECT nom,prenom FROM clients WHERE IDclient IN (SELECT idclient from devis WHERE IDclient='".$id."')";
        
         $resultat=$conn->query($query);       
         return $resultat;
 }
 public function recupeClient(){
  $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
        $conn = $bdd->connexion('sitetraduction','localhost','root','');

         $query = "SELECT * FROM clients" ;
         $resultat=$conn->query($query);       
         return $resultat;
 }
}
		 


        