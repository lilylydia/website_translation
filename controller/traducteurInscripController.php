<?php

include_once("../model/inscripTraduct.php");
include_once("../model/connexion.php");


$req= new Inscription();
$req->inscripTraducteur();
foreach ($_POST['langue'] as $row) {
	$req->insererLangue($row);
}
header('Location:../view/ProfileTraducteurs.php');
  



