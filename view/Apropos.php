<!DOCTYPE html>
<html lang="fr">
<head>
      <title>A propos</title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<body  data-spy="scroll" data-target="site-navbar-target" data-offset="300">
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
    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">A propos de nous</span>
      </div>
    </div>

    <div class="container pt-5 mb-5">
            <div class="row">
              <div class="col-lg-4">
                <h2 class="section-title-underline">
                  <span>Notre histoire?</span>
                </h2>
              </div>
              <div class="col-lg-4">
                <p>Nous savons que lorsque les gens comprennent, ils se soucient! En tant que super-héros de la traduction en Algérie, nous nous sommes lancés dans une mission de transformer la traduction humaine complexe en un processus simple et intuitif. C'est pourquoi nous avons créé DocTranslate - </p>
              </div>
              <div class="col-lg-4">
                <p>une plate-forme de traduction qui met en relation les citoyens avec les traduteurs des quatre coins du pays. Nous consacrons toute notre énergie, notre intelligence et notre attention à vous servir dans votre voyage de traduction.</p>
              </div>
            </div>
          </div> 

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <img src="images/test2.jpg" alt="Image" class="img-fluid"> 
                </div>
                <div class="col-lg-5 ml-auto align-self-center">
                    <h2 class="section-title-underline mb-5">
                        <span>Traduire les articles en ligne?</span>
                    </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti! Itaque, delectus?</p>
                    <p>Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum totam facere.</p>
                </div>
            </div>

            <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                        <img src="images/test1.jpg" alt="Image" class="img-fluid"> 
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                        <h2 class="section-title-underline mb-5">
                            <span>Cherchez un traducteur</span>
                        </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti! Itaque, delectus?</p>
                        <p>Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum totam facere.</p>
                    </div>
                </div>
        </div>
    </div>
    <div class="section-bg style-1" style="background-image: url('images/back.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-mortarboard"></span>
              <h3>Notre philosophie</h3>
              <p>Chez DocTranslate, nous pensons toujours comme des utilisateurs, car nos utilisateurs font partie de nous..</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-school-material"></span>
              <h3>Nos valeurs</h3>
              <p>Nous sommes fiers de la transparence, de la fiabilité et de la recherche de perfection ultimes.
                Nous sommes des super-héros de la traduction en Algérie..</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-library"></span>
              <h3>Notre mission</h3>
              <p>La vie est trop courte pour une mauvaise traduction.
                Nous voulons exploiter la technologie pour faciliter la traduction de vos articles, 
                avec un peu d'aide des humains..</p>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>Où nous sommes</span>
            </h2>
             <p>121, Rue Didouche Mourad - Alger, 16000 Alger. </p>
             <p >@ Mail: doctranslate@gmail.com</p>
             <p >Télé: 021 61 02 (55 / 56)</p>
             <p >Fax: 021 61 02 57</p>
          </div>
        </div>
      </div>

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
 </div>  <!--fin partie milieu /site-wrap/-->
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