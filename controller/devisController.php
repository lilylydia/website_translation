<?php
include_once("../model/devis.php");
include_once("../model/connexion.php");
include_once("../model/notifier.php");



if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['tlphn']) and isset($_POST['assermente']) and isset($_POST['adresse']) and isset($_POST['langue']) and isset($_POST['commentaire']) and isset($_POST['exampleRadios']) and isset($_POST['languesource']) and isset($_POST['typetrad']) and !empty($_FILES["files"]["name"]) ) {
   $r= new Devis();
   $res=$r->envoiDevis();
  header('Location:../view/ChoixTraducteur.php?id="'.$res.'"');
   }
   
if(isset($_POST['contacter']) AND isset($_POST['iddocument']) ){

		$req = new notifier();
        $req->notifierTrad($_POST['mail'],$_POST['iddocument']);
	    header('Location:../view/ChoixTraducteur.php?id="'.$_POST['iddocument'].'"');
}




