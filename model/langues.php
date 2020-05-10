<?php
include_once("../model/connexion_BDD.php");

class langue{
    public function getLangue(){
   

      $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
      $conn = $bdd->connexion('sitetraduction','localhost','root','');
      
      $resultat=$conn->query('SELECT * FROM langues');       
      return $resultat;
   
    }

}
     


        