<?php

include_once("../model/inscripTraduct.php");
include_once("../model/connexion.php");
include_once("../model/devis.php");
include_once("../model/MiseJour.php");
include_once("../model/notifier.php");


class RecupereDonnee{
  public function getData(){
  	$rq= new Inscription();
  	$r = $rq -> getDataTraduct(); 
    return $r;
  }
    public function getNomTrad($nom){
    $rq= new MAJ();
    $r = $rq -> recupreretrad($nom); 
    return $r;
  }
    public function getNomClient($nom){
    $rq= new MAJ();
    $r = $rq -> recuprereClient($nom); 
    return $r;
  }
  public function getLangue($id){
  	$req= new Inscription();
  	$res = $req ->getLangue($id);
    return $res;
  }
    public function getDatatraducteurConnecte(){
          $H = new Inscription();
          $req = $H->getDataTraducteur();
          return $req;  
  } 
  public function recupererdevis(){
          $resultat = new Devis();
          $rq = $resultat->recupererDevis();
          return $rq; 
  }

}  



