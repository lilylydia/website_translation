<?php
include_once("../model/connexion.php");
include_once("../model/notifier.php");


if(isset($_POST['envoyer']) AND isset($_POST['prix']) ){

  $req=new notifier();
  $req->ajouterPrix();
 // header('Location:../view/ProfileTraducteurs.php');
  echo ' <script type="text/javascript">
 
     
      alert("Prix envoyé au tclient avec succès");
      window.location="../view/ProfileTraducteurs.php";

 </script>';
 
}
if(isset($_POST['envoyer']) AND isset($_POST['accept']) ){

  $req=new notifier();
  $req->ajouterAccept();
  echo ' <script type="text/javascript">
      alert("Réponse envoyé au client avec succès");
      window.location="../view/ProfileClient.php";

 </script>';

}