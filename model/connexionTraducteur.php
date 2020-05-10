<?php
include_once("../model/connexion_BDD.php");

class cnxtraducteur{
  public function cnxtrad(){
    $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
    $conn = $bdd->connexion('sitetraduction','localhost','root','');

      $connexionReq=$conn->prepare('SELECT * FROM traducteurs WHERE email= ? AND mdp=? ');
   
      $connexionReq->execute(array($_POST['hotmail'],$_POST['mot']));

        $resultat=$connexionReq->fetch();
        if ($resultat['email'] == $_POST['hotmail'] && $resultat['mdp'] == $_POST['mot']) {
  
        session_start ();
    // Enregistrer username & password comme variables de session 
        
        $_SESSION['mailTrad'] = $_POST['hotmail'];
        $_SESSION['passwdTrad'] = $_POST['mot'];
        header ('location:..\view\ProfileTraducteurs.php'); 
         
    }
    else {
    echo '<body onLoad="alert(\'Email ou mot de passe incorrect\')">';
      
  }
   }
public function getDataTraduc(){

     $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
     $conn = $bdd->connexion('sitetraduction','localhost','root','');

     if(isset($_SESSION['mailTrad']) AND isset($_SESSION['passwdTrad'])){

      $resultat=$conn->query("SELECT * FROM traducteurs WHERE email='". $_SESSION['mailTrad']."' ");     
     return $resultat;

     }


}
}

