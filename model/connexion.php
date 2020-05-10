<?php
include_once("../model/connexion_BDD.php");
$bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
	  $conn = $bdd->connexion('sitetraduction','localhost','root','');

	  $connexionReq=$conn->prepare('SELECT * FROM clients WHERE email= ? AND mdp=? ');
	  if(isset($_POST['hotmail']) and isset($_POST['mot'])){
	  	$connexionReq->execute(array($_POST['hotmail'],$_POST['mot']));

        $resultat=$connexionReq->fetch();
        if ($resultat['email'] == $_POST['hotmail'] && $resultat['mdp'] == $_POST['mot']) {
  
        session_start ();
    // Enregistrer username & password comme variables de session 
        
        $_SESSION['email'] = $_POST['hotmail'];
        $_SESSION['mdp'] = $_POST['mot'];
       header ('location:..\view\ProfileClient.php');    
    }
    else {
    echo '<body onLoad="alert(\'Utilisateur ou mot de passe incorrect\')">';
      
  }
   }