<?php
require("../model/connexion_BDD.php");


class traduction{

	public function RecuperertypeTraduction(){
		//Connection à la base de données
		$bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
		$conn = $bdd->connexion('sitetraduction','localhost','root','');
	    $query = "SELECT * FROM traductiontype";
	    $resultat=$conn->query($query);  
    
        return $resultat;     
       
}
}