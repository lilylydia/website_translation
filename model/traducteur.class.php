<?php
 
class traducteur{
 
    private $nom;
    private $prenom;
    private $email;
    private $mdp;
    private $wilaya;
    private $commune;
    private $adresse;
    private $tlphn;
    private $fax;
    private $cv;
    private $assermente;
	function __construct($surname,$name,$email,$passe, $wilaya,$commune,$adresse, $phone,$fax,$cv,$assermente){
    
        $this->nom=$surname;
        $this->prenom=$name;
        $this->email=$email;
        $this->mdp=sha1($passe);
        $this->wilaya=$wilaya;
        $this->commune=$commune;
        $this->adresse=$adresse;
        $this->tlphn=$phone;
        $this->fax=$fax;
        $this->cv=$cv;
        $this->$assermente=$assermente;
    }
    public function getNom() {
        return $this->nom;
    }
 
    public function getPrenom() {
        return $this->prenom;
    }
 
    public function getEmail() {
        return $this->email;
    }

    public function getMotDePasse() {
        return $this->mdp;
    }
 
    public function getWilaya() {
        return $this->wilaya;
    }
 
    public function getCommune() {
        return $this->commune;
    }
 
    public function getAddresse() {
        return $this->adresse;
    }
 
    public function getNumTelephone() {
        return $this->tlphn;
    }
    public function getFax() {
        return $this->fax;
    }
    public function getCv() {
        return $this->cv;
    }

}
