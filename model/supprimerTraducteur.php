<?php
include_once("../model/connexion_BDD.php");
include_once("../model/traducteur.class.php");

//Connection à la base de données
      $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
      $conn = $bdd->connexion('sitetraduction','localhost','root','');

      $query = " DELETE FROM traducteurs WHERE IDtrad = '".$_POST['id']."' ";
      $conn->query($query);  