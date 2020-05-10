<?php

include_once("../model/inscripTraduct.php");
include_once("../model/langues.php");

class RecupereLangue{
  public function getLangue(){
  	$rq= new langue();
  	$r = $rq -> getLangue();
    return $r;
  }
}  
