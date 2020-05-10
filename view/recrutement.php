<!DOCTYPE html>
<html lang="fr">
<head>
      <title>Traduction des documents</title>
      <meta charset="utf-8">
      <meta http-equiv="pragma" content="no-cache" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet" type='text/css'>
  <link rel="stylesheet" href="bootstrap/fonts/icomoon/style.css">

  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-multiselect.css">
  <link rel="stylesheet" href="bootstrap/dist/css/jquery-ui.css">
  <link rel="stylesheet" href="bootstrap/dist/css/owl.carousel.min.css">
  <link rel="stylesheet" href="bootstrap/dist/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="bootstrap/dist/css/owl.theme.default.min.css">
  
  <link rel="stylesheet" href="bootstrap/dist/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="bootstrap/js/dist/bootstrap-multiselect.js">
   <link rel="stylesheet" href="bootstrap/js/dist/bootsrap-typeahead.min.js">
  <link rel="stylesheet" href="bootstrap/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="bootstrap/dist/css/aos.css">
  <link rel="stylesheet" href="bootstrap/dist/css/jquery.mb.YTPlayer.min.css" media="all"  type="text/css">
  <link rel="stylesheet" href="bootstrap/dist/css/style.css">
</head>
<body  data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div class="site-wrap">  
    <!-- entete du site -->
    <div class="py-2 bg-light">
      <div class="container-fluid" >
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
          </div>
          </div>
        </div>
      </div>
    </div>
   <!-- Menu du site -->
    <header class="site-navbar">
      <div class="container">
        <div class="d-flex align-items-center">
           <div class="mr-auto">
            <nav class="site-navigation position-relative text-lef" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="index.html" class="nav-link text-left">Accueil</a>
                </li>
                <li class="has-children">
                  <a href="about.html" class="nav-link text-left">Type de traduction</a>  
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
                  <a href="archive.php" class="nav-link text-left">Archive des article</a>
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
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="opacity: .7;">
    <ol class="carousel-inner" style="list-style-type:none;">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item w-100 active" style="background-image: url('images/trad1.jpg');">
      </div>
      <div class="carousel-item w-100 " style="background-image: url('images/trad-2.jpg')">
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
<div class="site-section">
  <div class="container-fluid">
  <div class="row">
    <!-- Partie milieu Devis -->
    <div class="col-sm">
        <div class="site-section">
        <div class="container">
        <div class="row justify-content-right">
        <div class="col-md">
      <form action="../controller/traducteurInscripController.php" method="POST" enctype="multipart/form-data">
                  	<div class="col-md-6 form-group">
                            <label for="nom">Nom</label>
                            <input type="text"  name="nom" class="form-control form-control-lg" data-toggle="modal" data-target="#exampleModal">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom"class="form-control form-control-lg" data-toggle="modal" data-target="#exampleModal">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control form-control-lg" data-toggle="modal" data-target="#exampleModal">
                        </div>
                        <div class="col-md-6 form-group">
                           <i class=" prefix grey-text"></i>
                           <label for="email">Mot de passe</label>
                           <input type="password" id="inputPassword" name='password' class="form-control form-control-lg">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="num">Numero de téléphone</label>
                            <input type="num" id="num" name ="tlphn" class="form-control form-control-lg" data-toggle="modal" data-target="#exampleModal">
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="num">Numero de fax</label>
                            <input type="num" id="num" name ="fax" class="form-control form-control-lg" data-toggle="modal" data-target="#exampleModal">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="adresse">Adresse</label>
                            <input type="adresse" id="adresse" name="adresse" class="form-control form-control-lg" data-toggle="modal" data-target="#exampleModal">
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="adresse">Wilaya</label>
                            <input type="adresse" id="adresse" name="wilaya" class="form-control form-control-lg" data-toggle="modal" data-target="#exampleModal">
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="adresse">Commune</label>
                            <input type="adresse" id="adresse" name="commune" class="form-control form-control-lg" data-toggle="modal" data-target="#exampleModal">
                        </div>
                        <div class="col-md-6 form-group"> <p> Langues: </p></div>
                         
                         <?php  
                             include_once("../controller/languesController.php");
                             $cf = new RecupereLangue();
                             $r = $cf->getLangue();
                             foreach ( $r as $row) {                     
                             echo '

                         <div class="form-check form-check-inline md-6">
                            <input class="form-check-input" type="checkbox" name="langue[]" id="inlineRadio1" value='.$row['langue'].'>
                            <label class="form-check-label" for="inlineRadio1">'.$row['langue'].'</label>
                         </div>  ';}?>                     
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
                          <label for="exampleFormControlFile1">CV</label>
                          <input type="file" class="form-control-file" name="files" accept="application/pdf" id="exampleFormControlFile1">
                          </div>
                          <div class="form-group">
                          <label for="exampleFormControlFile1">Autres fichiers référence</label>
                          <input type="file" class="form-control-file" name ="ref" accept="application/pdf" id="exampleFormControlFile1" multiple>
                          </div>
                      
                         <div class="col-md-12 form-group">
                             <input type="submit" id='submit' value='Envoyer' class="btn btn-info px-4 rounded-0" >
                        </div>
                </form>
               </div>
                   
              </div>
            </div>
        </div> 
      </div>
    </div>
  </div>
</div>
</div>  <!--fin partie milieu /site-section/-->
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
                 <input class="search_input" type="text" name="" placeholder="Search...">
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
<script type="text/javascript">
 $(.dropdown-menu li a).click(function(){
var selText = $(this).text();
$(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class=caret></span>');
});
</script>
</div> <!-- fin site -wrap-->
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