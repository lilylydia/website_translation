<?php

include_once("../model/inscription.php");
include_once("../model/connexion.php");
include_once("../model/MiseJour.php");

$r= new Inscription();
$r->majDonneeClient();
if(isset($_POST['deconnecter'])){
	$rs = new Inscription();
	$rs->deconnexion();
	header("location: ../view/index.php");
}

if(isset($_POST['bloquer'])){
	$req = new MAJ();
	$req->bloquerTrad();
	header('Location:../Admin/Traducteurs.php');
}
if(isset($_POST['debloquer'])){
	$req = new MAJ();
	$req->debloquerTrad();
	header('Location:../Admin/Traducteurs.php');
}
if(isset($_POST['supprimer'])){
	$req = new MAJ();
	$req->supprimerTrad();
	header('Location:../Admin/ListenoireTraducteurs.php');
}
if(isset($_POST['bloqClient'])){
	$req = new MAJ();
	$req->bloquerClient();
	header('Location:../Admin/clients.php');
}
if(isset($_POST['debloqClient'])){
	$req = new MAJ();
	$req->debloquerClient();
	header('Location:../Admin/clients.php');
}
if(isset($_POST['suppClient'])){
	$req = new MAJ();
	$req->supprimerclient();
	header('Location:../Admin/ListenoireClients.php');
}

if(isset($_POST['profile'])){
	$req = new MAJ();
	$req->supprimerTrad();
	header('Location:../view/ProfileTraducteurs.php');
}
if(isset($_POST['supprimerDoc'])){
	$req = new MAJ();
	$req->supprimerdocument();
}
