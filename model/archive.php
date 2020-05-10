<?php
include_once("../model/connexion_BDD.php");
class archives{
        
	public function getDataTraduct(){
        $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
        $conn = $bdd->connexion('sitetraduction','localhost','root','');

         $query = "SELECT * FROM articles ";
         $resultat=$conn->query($query);       
         return $resultat;
}
}