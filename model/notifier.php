<?php
include_once("../model/connexion_BDD.php");

class notifier{
	public function notifierTrad($mail,$iddoc){
     // session_start();
      $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
      $conn = $bdd->connexion('sitetraduction','localhost','root','');
      session_start();
     
      if(isset($_SESSION['email'])){
      $var="SELECT IDclient FROM clients WHERE email= '".$_SESSION['email']."' ";
      $v="SELECT IDtrad FROM traducteurs WHERE email= '".$mail."' ";
       
      
      $result=$conn->query($v);
      $res=$conn->query($var);
      $row=$res->fetch();
      $r=$result->fetch();
      
      $query = "INSERT INTO notifications(IDTrad,IDclient,iddocument) VALUES ('".$r['IDtrad']."','".$row['IDclient']."','".$iddoc."')";
      $conn->query($query);
    
      }
 

}
public function NotifTraducteur(){
       $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
       $conn = $bdd->connexion('sitetraduction','localhost','root','');
        
        $v="SELECT IDtrad FROM traducteurs WHERE email= '".$_SESSION['mailTrad']."' ";
        $result=$conn->query($v); 
        $r=$result->fetch();

       $query = "SELECT * FROM clients WHERE IDclient IN (SELECT IDclient FROM notifications WHERE IDTrad= '".$r['IDtrad']."')";
       $res=$conn->query($query);
       return $res;
}
public function recupererDevis(){
       $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
       $conn = $bdd->connexion('sitetraduction','localhost','root','');
       $var="SELECT IDtrad FROM traducteurs WHERE email= '".$_SESSION['mailTrad']."' ";
        $resul=$conn->query($var); 
        $t=$resul->fetch();
        
        $v="SELECT iddocument FROM notifications WHERE IDTrad= '".$t['IDtrad']."' ";
        $result=$conn->query($v); 
        $r=$result->fetch();

       $query = "SELECT * FROM devis WHERE id = '".$r['iddocument']."'";
       $res=$conn->query($query);
       return $res;
}
public function recupererDevisClient(){
      $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
       $conn = $bdd->connexion('sitetraduction','localhost','root','');
       $var="SELECT IDclient FROM clients WHERE email= '".$_SESSION['email']."' ";
        $resul=$conn->query($var); 
        $t=$resul->fetch();
        
        $v="SELECT iddocument FROM notifications WHERE IDclient = '".$t['IDclient']."' ";
        $result=$conn->query($v); 
        $r=$result->fetch();

       $query = "SELECT * FROM devis WHERE id = '".$r['iddocument']."' ";
       $res=$conn->query($query);
       return $res;
}
public function getPrix(){
       $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
       $conn = $bdd->connexion('sitetraduction','localhost','root','');
       $var="SELECT IDtrad FROM traducteurs WHERE email= '".$_SESSION['mailTrad']."' ";
       $resul=$conn->query($var); 
        $t=$resul->fetch();
       $v="SELECT * FROM notifications WHERE IDTrad= '".$t['IDtrad']."' ";
       $result=$conn->query($v); 
       return $result;

}
public function ajouterPrix(){
      $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
      $conn = $bdd->connexion('sitetraduction','localhost','root','');
    
      $v="UPDATE notifications SET  prixTrad='".$_POST['prix']."' WHERE ID='".$_POST['id']."'";
      $conn->query($v); 
       
}
public function ajouterAccept(){
      $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
      $conn = $bdd->connexion('sitetraduction','localhost','root','');
    
      $v="UPDATE notifications SET  prixAccepté='".$_POST['accept']."' WHERE ID='".$_POST['id']."'";
      $conn->query($v); 
       
}
public function notifierClient(){
      $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
      $conn = $bdd->connexion('sitetraduction','localhost','root','');
 

      $var="SELECT IDclient FROM clients WHERE email= '".$_SESSION['email']."' ";
      $resul=$conn->query($var); 
      $t=$resul->fetch();
      $query = "SELECT * FROM traducteurs WHERE IDtrad IN (SELECT IDTrad FROM notifications WHERE IDclient='".$t['IDclient']."')";
      //$v="SELECT * FROM notifications WHERE IDclient= '".$t['IDclient']."' ";
      $result=$conn->query($query); 
      return $result;
}
public function PrixPourClient(){
       $bdd = new ConnexionBdd_model('sitetraduction','localhost','root','');
       $conn = $bdd->connexion('sitetraduction','localhost','root','');
       $var="SELECT IDclient FROM clients WHERE email= '".$_SESSION['email']."' ";
       $resul=$conn->query($var); 
        $t=$resul->fetch();
       $v="SELECT * FROM notifications WHERE IDclient= '".$t['IDclient']."' ";
       $result=$conn->query($v); 
       return $result;

}
}
