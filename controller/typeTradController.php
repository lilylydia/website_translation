<?php

include_once("../model/TypeTraduction.php");
include_once("../model/connexion.php");

class TypeTraduction{
	public function getType()
	{
		$req= new traduction();
        $res=$req->RecuperertypeTraduction();  
        return $res;
	}
}

