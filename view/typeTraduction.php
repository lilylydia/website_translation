<!DOCTYPE html>
<html lang="fr">
<head>
      <title>Archive des articles</title>
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
<div class="services">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="section_title">Traduction scientifique</div>
        </div>
      </div>
      <div class="row icon_boxes_row">
        <!-- Icon Box --> 
        <div class="col-xl-6 col-lg">
          <div class="icon_box">
            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
              <div class="icon_box_text">Les textes scientifiques et médicaux développent des idées complexes au moyen d’une terminologie à la fois spécifique et pointue. En raison de la diversité et de l’ampleur des différents domaines que comporte cette catégorie, notre site web de traduction scientifique et médicale sélectionne pour vous les traducteurs les mieux adaptés à chaque projet en tenant particulièrement compte de leurs expériences et de leur compréhension des termes scientifiques et médicaux. L’objectif est de s’assurer que la traduction reflète avec précision le sens du texte source.</div>
            </div> 
          </div>
        </div> 
        <div class="col-xl-6 col-lg">
          <div class="icon_box">
            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
              <div class="icon_box_text">Cultures Connection a acquis une expérience prouvée dans le domaine de la traduction scientifique et technique,  notamment sur les sujets suivants: biotechnologies, manipulations d’ADN, physiologie moléculaire, biologie, zoologie, botanique, géologie, biodiversité, biomédicale, médicale, environnement, développement durable, alimentation, santé, virologie, médecine, bioingénierie, énergies renouvelables, relations hôte/pathogène, etc.o</div>
            </div> 
          </div>
        </div> 
      </div>
    </div>
     <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="section_title">Traduction générale</div>
        </div>
      </div>
      <div class="row icon_boxes_row">
        <!-- Icon Box --> 
        <div class="col-xl-6 col-lg">
          <div class="icon_box">
            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
              <div class="icon_box_text">Nous entendons par traduction générale : une traduction pour laquelle le traducteur ne doit pas disposer d’une expérience ou de connaissances pointues. C’est le cas par exemple des articles d’actualité, des descriptions de voyages et des communications professionnelles. Nous sélectionnons néanmoins toujours, même pour des traductions générales, le traducteur le plus adapté, par exemple un traducteur qui a déjà travaillé pour le même client, ou un traducteur particulièrement intéressé par certains sujets.</div>
            </div> 
          </div>
        </div> 
        <div class="col-xl-6 col-lg">
          <div class="icon_box">
            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
              <div class="icon_box_text">Nos procédures en matière de traduction sont identiques quel que soit le type de traduction. Vous souhaitez faire traduire un texte général ? Nous le traduisons avec ce même souci du détail et de la qualité que pour tous les autres textes. Votre texte est traduit par un professionnel dont la langue cible est la langue maternelle. La traduction est – comme toujours – vérifiée en profondeur par un deuxième traducteur. Pour des traductions générales de la plus haute qualité, est ici aussi votre meilleur choix.</div>
            </div> 
          </div>
        </div> 
      </div>
    </div>
     <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="section_title">Traduction de site web</div>
        </div>
      </div>
      <div class="row icon_boxes_row">
        <!-- Icon Box --> 
        <div class="col-xl-6 col-lg">
          <div class="icon_box">
            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
              <div class="icon_box_text">Grâce à notre site de traduction de sites web , vous pouvez désormais surfer sur les sites du monde entier, sans aucune difficulté. Qu'importe la langue du site, le traducteur de pages web  vous permet de traduire instantanément son contenu.
Une traduction d'Internet qui va bien plus loin qu'une simple traduction mot à mot. Pour éviter les contresens et traduire une page web en respectant la structure grammaticale, il s'appuie sur une technologie d'analyse linguistique qui a fait l'objet de plusieurs brevets.
Précurseur et leader de la traduction des sites web.</div>
            </div> 
          </div>
        </div> 
        <div class="col-xl-6 col-lg">
          <div class="icon_box">
            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
              <div class="icon_box_text">Cultures Connection a acquis une expérience prouvée dans le domaine de la traduction scientifique et technique,  notamment sur les sujets suivants: biotechnologies, manipulations d’ADN, physiologie moléculaire, biologie, zoologie, botanique, géologie, biodiversité, biomédicale, médicale, environnement, développement durable, alimentation, santé, virologie, médecine, bioingénierie, énergies renouvelables, relations hôte/pathogène, etc.o</div>
            </div> 
          </div>
        </div> 
      </div>
    </div>
  </div>


  <!--fin partie milieu /site-wrap/-->
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
  </div>
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