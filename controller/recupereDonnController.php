
<?php
 include_once("../model/MiseJour.php");
 include_once("../model/connexion_BDD.php");
  include_once("../model/inscription.php");
 
 class recuperer{
 	public function getDataClient(){
          $v = new MAJ();
          $r = $v->getData();
          return $r;	
 	} 
 	public function recupereCient(){
 		$v = new MAJ();
 		$r = $v->recupeClient();
          return $r;
 	}
 }