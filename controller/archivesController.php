<?php

include_once("../model/archive.php");
include_once("../model/connexion.php");

class RecupereDonnee{
  public function getData(){
  	$rq= new archives();
  	$r = $rq -> getDataTraduct(); 
    return $r;
  }
}  



