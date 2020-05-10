<?php

include_once("../model/connexion.php");
include_once("../model/notifier.php");

class message{
	public function messageTrad(){
     $req = new notifier();
     $res = $req->NotifTraducteur();
     return $res;
	}
	public function getDevis(){
		$req = new notifier();
		$res= $req->recupererDevis();
		return $res;
	}
	public function getPrix(){
		$req= new notifier();
		$res = $req->getPrix();
		return $res;
	}
	public function notifierClient(){
		$req = new notifier();
		$res = $req->notifierClient();
		return $res;
	}
	public function devisClient(){
		$req = new notifier();
		$res = $req->recupererDevisClient();
		return $res;
	}
	public function prixClient(){
		$req = new notifier();
		$res = $req->PrixPourClient();
		return $res;
	}
}