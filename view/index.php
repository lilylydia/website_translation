<!DOCTYPE html>
<?php session_start ();?>
<html lang="fr">
<head>
      <title>Traduction des documents</title>
      <meta charset="utf-8">
      <meta http-equiv="pragma" content="no-cache" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet" type='text/css'>
  <link rel="stylesheet" href="bootstrap/fonts/icomoon/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  
  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/dist/css/jquery-ui.css">
  <link rel="stylesheet" href="bootstrap/dist/css/owl.carousel.min.css">
  <link rel="stylesheet" href="bootstrap/dist/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="bootstrap/dist/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="bootstrap/dist/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="bootstrap/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="bootstrap/dist/css/aos.css">
  <link rel="stylesheet" href="bootstrap/dist/css/jquery.mb.YTPlayer.min.css" media="all"  type="text/css">
  <link rel="stylesheet" href="bootstrap/dist/css/style.css">
    <link href="../Admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body  data-spy="scroll" data-target="site-navbar-target" data-offset="300">
  <div class="site-wrap">  
    <!-- entete du site -->
    <div class="py-2 bg-light">
      <div class="container" >
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
             <div class="site-logo">
              <a href="index.html" class="d-block">
              <img src="images/logo3.png" alt="Image" class="img-fluid">
              </a>
            </div>
          </div> 
          <div class="col-lg-3 text-right"> 
           <div class="ml-auto">
            <div class="social-wrap">
              <a href="#" class="mr-8" ><span class="icon-facebook "></span></a>
              <a href="#"class="mr-8"><span class="icon-twitter "></span></a>
              <a href="#" class="mr-8"><span class="icon-linkedin"></span></a>
              <a href="#" class="mr-8"><span class="icon-instagram"></span></a> 
            </div>
            <a>
            <?php
            if(isset($_SESSION['email']) AND isset($_SESSION['mdp'])){
            
              echo '
              <ul class="nav-item dropdown no-arrow container">
              <a class="nav-link dropdown-toggle  site-logo" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                <img class="img-profile rounded-circle" src="../Admin/img/person_4.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="ProfileClient.php">
                  <i class="fas fa-envelope fa-sm fa-fw mr-2 text-gray-400"></i>
                  '.$_SESSION['email'].'
                </a>
                <a class="dropdown-item" href="ProfileClient.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Paramètres
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Déconnexion
                </a>
              </div>
            </ul>  ';}?></a>
             <?php
            if(isset($_SESSION['mailTrad']) AND isset($_SESSION['passwdTrad'])) { 
              echo '
              <ul class="nav-item dropdown no-arrow container">
              <a class="nav-link dropdown-toggle  site-logo" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                <img class="img-profile rounded-circle" src="../Admin/img/person_3.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="ProfileClient.php">
                  <i class="fas fa-envelope fa-sm fa-fw mr-2 text-gray-400"></i>
                  '.$_SESSION['mailTrad'].'
                </a>
                <a class="dropdown-item" href="ProfileTraducteurs.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Paramètres
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Déconnexion
                </a>
              </div>
            </ul>  ';}?>
          </div>
          </div>
        </div>
      </div>
    </div>
   <!-- Menu du site -->

    <header class="site-navbar " >
      <div class="container ">
        <div class="align-items-center">
           <div class="mr-auto">
            <nav class="site-navigation position-relative text-lef" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="index.php" class="nav-link text-left">Accueil</a>
                </li>
                <li class="has-children">
                  <a href="typeTraduction.php" class="nav-link text-left">Type de traduction</a>  
                   <ul class="dropdown">
                     <?php
                              include_once("../controller/typeTradController.php");
                              $cf = new TypeTraduction();
                              $r = $cf-> getType();
                              foreach ($r as $row) { 
                     echo '
                    <li><a href="teachers.html">'.$row['type'].'</a></li> ' ;}?>
                  </ul>
                </li>
                <li>
                  <a href="PageTraducteurs.php" class="nav-link text-left">Liste des traducteurs</a>
                </li>
                 <li>
                  <a href="recrutement.php" class="nav-link text-left">Lien de recrutement</a>
                </li>
                <li>
                  <a href="archive.php" class="nav-link text-left">Archive des articles</a>
                </li>
                <li>
                  <a href="Apropos.php" class="nav-link text-left">À propos </a>
                </li>
              </ul>       
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- slideshow -->
  <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
    <ul class="carousel-inner" style="list-style-type:none;">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" style="background-image: url('images/trad1.jpg');">
      </div>
      <div class="carousel-item" style="background-image: url('images/trad-2.jpg')">
      </div>
      <div class="carousel-item" style="background-image: url('images/trad5.jpg')">
      </div>
      <div class="carousel-item" style="background-image: url('images/trad3.jpg')">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
    <!-- Partie milieu exemples traduction de documents -->
<div class="site-section ">
  <div class="container-fluid">
  <div class="row">
  <div class="col-sm">

        <div class="site-section">
        <div class="col-lgs col-md mb mb-lg">
            <div class="feature-1 ">
               <div class="feature-1-content " id="summary">
                <div class="row"> <div class="col-sm">  <img src="images/medic-563423_1920.jpg" alt="Image" class="img-fluid"></div> <div class="col-sm"><h2 style="color: #01BAEF;font-family: 'Lucida'Grande, sans-serif; font-size: 25px;">Document juridique: Changement familial</h2></div></div>
                
                <p class="collapse text-lef" id="co">
                   A la suite d’un divorce ou d’une séparation, il est toujours possible de modifier l’organisation de la garde de son enfant, à condition de présenter un élément nouveau. Le juge peut alors accéder à la demande si celle-ci est bénéfique pour l’enfant.
                   Le papa projette de déménager ? La maman se révèle moins disponible en raison de ses horaires de travail ? En cas de résidence alternée, celle-ci peut devenir difficile. En raison de ce changement majeur dans la vie d’un enfant, la résidence ou le droit de visite peuvent évoluer au regard de la loi. Idem si l’enfant présente un mal-être ou s’il en fait la demande à ses parents.
                   Dans le cas où votre ex-conjoint et vous-même convenez d’une solution, vous pouvez modifier le mode de garde d’un commun accord sans passer devant le juge. Néanmoins, Laurence Mayer, avocate à la cour et spécialiste en droit de la famille à Paris, met en garde : « Si jamais cette nouvelle solution ne convient plus à l’un des parents, c’est le jugement exécutoire du divorce qui prévaut. Il vaut donc mieux faire homologuer d’un commun accord le nouveau mode de résidence souhaité. » Ainsi, l’accord a une valeur officielle qui s’imposera en cas de difficulté.</p>
                  <a class="collapsed" data-toggle="collapse" href="#co" aria-expanded="false" aria-controls="collapseSummary"></a>
              </div>
            </div>
        </div>
        </div>
       <div class="site-section">
       <div class="col-lg col-md mb mb-lg">
            <div class="feature-1 ">
              <div class="feature-1-content" id="summary">
                <div class="row"> <div class="col-sm"> <img src="images/binding-contract-948442_1920.jpg" alt="Image" class="img-fluid"></div> <div class="col-sm"><h2 style="color: #01BAEF;font-family: 'Lucida'Grande, sans-serif; font-size: 25px;">Document scientifique: faire mieux en prévention diabétique</h2></div></div> 
               
                
                <p class="collapse text-left" id="col">
                   De 12 à 25 % des personnes diabétiques, types 1 et 2 confondus, présenteront « un pied diabétique » au cours de leur vie. Les personnes en situation de précarité sont particulièrement touchées, et de façon plus précoce.
                   Les plaies du pied constituent souvent un tournant dans la maladie, qui passe d’un état qu’on pourrait qualifier d’invisible à une pathologie, la plaie, visible à la fois par la personne malade, son entourage, mais aussi les soignants. Il s’agit d’une complication particulièrement grave pouvant engager le pronostic vital et témoignant souvent d’un diabète multicompliqué. Certaines plaies, malgré une prise en charge optimale, ne cicatriseront pas et feront envisager une amputation. Une décision souvent traumatisante pour le patient et son entourage. Le risque d’amputation est multiplié par 25 en présence d’un diabète.
                   Les données de suivi à court et moyen terme des personnes hospitalisées pour pied diabétique sont alarmantes : environ 50 % nécessiteront une nouvelle hospitalisation pour plaie du pied, 30 % pour une amputation de membre inférieur, et de 30 à 40 % décéderont. Quant au pronostic postamputation, il est effroyable : 20 % des sujets seront réamputés, et 30 % seront réhospitalisés dans l’année.</p>
                  <a class="collapsed" data-toggle="collapse" href="#col" aria-expanded="false" aria-controls="collapseSummary"></a>
              </div>
            </div>
        </div>
        </div>
        <div class="site-section">
      <div class="col-lg col-md mb mb-lg">
            <div class="feature-1 ">
              <div class="feature-1-content " id="summary">
               <div class="row"> <div class="col-sm"><img src="images/course_1.jpg" alt="Image" class="img-fluid"></div> <div class="col-sm"><h2 style="color: #01BAEF;font-family: 'Lucida'Grande, sans-serif; font-size: 25px;">Traduction site web</h2></div></div>               
                <p class="collapse" id="coll">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                  <a class="collapsed" data-toggle="collapse" href="#coll" aria-expanded="false" aria-controls="collapseSummary"></a>
              </div>
            </div>
        </div>
        </div>  
    </div>
    <!-- Partie milieu Devis -->
    <div class="col-sm">
        <div class="site-section">
        <div class="container-fluid">
        <div class="row justify-content-right">
        <div class="col-md">
        <div class="row">
        <div class="container">
            <div class="row">
             <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
             <div class="modal-content">
              <div class="modal-body mx-3">
                <button type="button" class="close mb-2" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <form action="../controller/inscriptionController.php" method="POST">
                <div class="md-form mb-2">
                  <i class="fas prefix grey-text"></i>
                  <input type="email" id="email" class="form-control form-control-lg" name="hotmail" placeholder="Email">
              </div>
              <div class="md-form ">
                <i class=" prefix grey-text"></i>
                <input type="password" id="inputPassword" name='mot'class="form-control form-control-lg" placeholder="Mot de passe">
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
            <div class="col-md-12 form-group text-center">
              <input type="submit" id='submit' value='Se connecter' class="btn btn-info px-4 rounded-0" >
            </div>
           </form>
              
           <div >Vous n'avez de compte? <a href="" class="text-info" data-target="#modalInscripForm" data-toggle="modal" > Inscrivez-vous</a></div>
           <div > <a href="" class="text-info" data-target="#modalcnx" data-toggle="modal">Se connecter en tant que traducteur?</a></div>
           </div>
           </div>
           </div>
        </div>
<div class="col-md-12 form-group ">
      <a href="" class="btn btn-info px-4 rounded-0" data-toggle="modal" data-target="#modalLoginForm">Se connecter</a>
       <a href="" class="btn btn-info px-4 rounded-0 ml-4" data-toggle="modal" data-target="#modalInscripForm">S'inscrire</a>
</div>      

 <!-- partie connexion traducteur -->

   <div class="modal fade" id="modalcnx" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
         <h4 class="modal-title white-text w-100 font-weight-bold py-2">S'inscrire</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mb-2">
            <form action="../controller/ConnexionTraductController.php" method="POST">
                <div class="md-form mb-2">
                  <i class="fas prefix grey-text"></i>
                  <input type="email" id="email" class="form-control form-control-lg" name="hotmail" placeholder="Email">
              </div>
              <div class="md-form ">
                <i class=" prefix grey-text"></i>
                <input type="password" id="inputPassword" name='mot'class="form-control form-control-lg" placeholder="Mot de passe">
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
            <div class="col-md-12 form-group text-center">
              <input type="submit" id='submit' value='Se connecter' class="btn btn-info px-4 rounded-0" >
            </div>
           </form>
      </div>
    </div>
  </div>
</div>
 <!-- partie connexion traducteur -->
 <!-- partie inscription -->
   <div class="modal fade" id="modalInscripForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
         <h4 class="modal-title white-text w-100 font-weight-bold py-2">S'inscrire</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mb-2">
         <form action="../controller/inscriptionController.php" method="POST" >
           <div class="md-form mx-sm-3 mb-2">
            <input type="text" id="nom" name='nom' class="form-control form-control-sm" placeholder="Nom">
        </div>
        <div class="md-form mx-sm-3 mb-2">
            <input type="text" id="nom" name='prenom' class="form-control form-control-sm" placeholder="Prénom">
        </div>
        <div class="md-form mx-sm-3 mb-2">
          <i class="fas prefix grey-text"></i>
          <input type="email" id="email" name ='email' class="form-control form-control-sm" placeholder="Email">
        </div>
        <div class="md-form mx-sm-3 mb-2">
          <i class=" prefix grey-text"></i>
          <input type="password" id="inputPassword" name='password' class="form-control form-control-sm" placeholder="Mot de passe">
        </div>
        <div class="md-form mx-sm-3 mb-2">
          <i class=" prefix grey-text"></i>
          <input type="password" id="inputPassword" name='password2' class="form-control form-control-sm" placeholder="confirmer Mot de passe">
        </div>
        <div class="md-form mx-sm-3 mb-2">
            <input type="text" id="nom" name='wilaya' class="form-control form-control-sm" placeholder="Wilaya">
        </div>
        <div class="md-form mx-sm-3 mb-2">
            <input type="text" id="nom" name='commune' class="form-control form-control-sm" placeholder="Commune">
        </div>
        <div class="md-form mx-sm-3 mb-2">
             <input type="adresse" id="adresse" name='adresse' class="form-control form-control-sm" placeholder="Adresse">
        </div>
        <div class="md-form mx-sm-3 mb-2">
             <input type="num" id="num" name='tlphn' class="form-control form-control-sm"  placeholder="Numéro de téléphone">
        </div>
         <div class="md-form mx-sm-3 mb-2">
             <input type="num" id="num" name='fax' class="form-control form-control-sm"  placeholder="Numéro de fax">
        </div>
         
      <div class="modal-footer d-flex justify-content-center">
         <div class="col-md-12 form-group text-center">
           <input type="submit" id='submit' value='S inscrire' class="btn btn-info px-4 rounded-0" >
         </div>
      </div>
       </form>
      </div>
    </div>
  </div>
</div>                  
 <!-- fin partie inscription -->
</div> 
</div>
<!-- modal pour bloquer formulaire-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Vous devez vous inscrire d'abord</h5>
      </div>
    </div>
  </div>
</div>
<form action="../controller/devisController.php" method="POST" class="col-md-12 form-group" enctype="multipart/form-data">
                        <div class="col-md-12 form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" class="form-control form-control-lg" data-toggle="modal"  <?php  if(!isset($_SESSION['email']) AND !isset($_SESSION['mdp'])){ 
                              echo 'data-target="#exampleModal"';
                            }?>  >
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="prenom">Prénom</label>
                            <input type="prenom" name="prenom" class="form-control form-control-lg" data-toggle="modal" data-target="">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg" data-toggle="modal"  data-target="">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="num">Numero de téléphone</label>
                            <input type="num"  name="tlphn" class="form-control form-control-lg" data-toggle="modal" data-target="">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="adresse">Adresse</label>
                            <input type="adresse"  name="adresse" class="form-control form-control-lg" data-toggle="modal">
                        </div>
                        <div  class="col-md-12 form-group">
                          <label for="langue">Langue d'origine</label>
                          <select class="form-control" name="langue">'
                          <?php
                              include_once("../controller/languesController.php");
                              $c = new RecupereLangue();
                              $r = $c-> getLangue();
                              foreach ($r as $row){
                          echo' 
                          <option>'.$row['langue'].'</option>' ;}?>
                        </select>
                        </div>
                        <div  class="col-md-12 form-group">
                          <label for="languesource">Langue source</label>
                          <select class="form-control" name="languesource">
                          <?php
                              include_once("../controller/languesController.php");
                              $c = new RecupereLangue();
                              $r = $c-> getLangue();
                              foreach ($r as $row){
                          echo' 
                          <option>'.$row['langue'].'</option>' ;}?>
                        </select>
                        </div>
                        <div  class="col-md-12 form-group">
                          <label for="typetrad">Type traduction</label>
                          <select class="form-control" name="typetrad">
                          <?php
                              include_once("../controller/typeTradController.php");
                              $cef = new TypeTraduction();
                              $res = $cef->getType();
                              foreach ($res as $row){
                          echo' 
                          <option>'.$row['type'].'</option>' ;}?>
                        </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="commentaire"> Commentaires</label>
                           <textarea class="form-control" id="exampleFormControlTextarea1" name="commentaire"rows="3"></textarea>
                        </div>
                        <div class="col-md-6">
                          <div>
                            <label for="exampleFormControlFile1"> Traducteur assermenté</label>
                            <select class="form-control form-control-md-12" name="assermente">
                            <option>Oui</option>
                            <option>Non</option>
                            </select>
                          </div>
                        </div>  
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Document à traduire</label>
                          <input type="file" name="files" class="form-control-file" id="exampleFormControlFile1" accept="application/pdf">
                        </div> 
                         <label class="form-check-label" for="exampleRadios1">Veuillez choisir le type de traduction: </label>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="devis" checked>
                            <label class="form-check-label" for="exampleRadios1">Devis</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="traduction">
                            <label class="form-check-label" for="exampleRadios2">Traduction</label>
                        </div>
                       <!-- <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>  -->  
                        <div class="col-md-12 form-group">
                          <input type="submit" id='submit' value='Envoyer' class="btn btn-info px-4 rounded-0">
                        </div>
                    </form>         
              </div>
            </div>
        </div> 
      </div>
    </div>
  </div>
</div>
<!--fin partie milieu /site-section/-->

     <div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xs-7">
            <h2>Inscrivez-vous gratuitement!</h2>
            <p>Avec notre plateforme, Ne vous souciez pas si vous n'avez pas trouvé un traducteur</p>
          </div>
          <div class = "col-xs h-100 mx-auto">
             <div class="d-flex justify-content-center">
               <div class="searchbar">
                 <input class="search_input" type="text" name="" placeholder="Chercher...">
                 <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
               </div>
             </div>
          </div>
     
        </div>
      </div>
    </div> 
  <section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Liens</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Accueil</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Lien de recrutement</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Archives des articles</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Contacts</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>A propos</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Liste des Traducteurs</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Traducteurs générale</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Traducteur de sites web</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Traducteurs scientifique</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Type de traductions </h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Traduction générale</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Traduction de site web</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Traduction scientifique</a></li>
          </ul>
        </div>
      </div>  
    </div>
  </section>
  </div><!-- fin site -wrap-->
  <script type="text/javascript">
     $(.dropdown-menu li a).click(function(){
var selText = $(this).text();
$(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class=caret></span>');
});
     window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
  </script> 
  <script src="bootstrap/dist/js/jquery-3.3.1.min.js"></script>
  <script src="bootstrap/dist/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="bootstrap/dist/js/jquery-ui.js"></script>
  <script src="bootstrap/dist/js/popper.min.js"></script>
  <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="bootstrap/dist/js/owl.carousel.min.js"></script>
  <script src="bootstrap/dist/js/jquery.stellar.min.js"></script>
  <script src="bootstrap/dist/js/jquery.countdown.min.js"></script>
  <script src="bootstrap/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="bootstrap/dist/js/jquery.easing.1.3.js"></script>
  <script src="bootstrap/dist/js/aos.js"></script>
  <script src="bootstrap/dist/js/jquery.fancybox.min.js"></script>
  <script src="bootstrap/dist/js/jquery.sticky.js"></script>
  <script src="bootstrap/dist/js/jquery.mb.YTPlayer.min.js"></script>
  <script src="bootstrap/dist/js/main.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>

</body>
    

</html>