<?php
include_once("../model/connexionTraducteur.php");


if(isset($_POST['hotmail']) and isset($_POST['mot'])){
 	$res = new cnxtraducteur();
    $res->cnxtrad();   
}
class RecupereDonnee{
	public function getData(){
		$rs = new cnxtraducteur();
	    $req=$rs->getDataTraduc();
        return $req;
	}
}




