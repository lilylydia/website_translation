<!DOCTYPE html>
<?php session_start ();?>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mon Profile</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/dist/css/style_profile.css">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="bootstrap/css/resume.css" rel="stylesheet">

</head>

<body id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Clarence Taylor</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="images/person_4.jpg" alt="">
      </span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a class="nav-link js-scroll-trigger" href="#about"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger text-black" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">Informations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Documents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Historique</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Paramètres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">Interêts</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
      <!-- Nav Item - Alerts -->


<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="row">
    <div class="col">
    <form class="form-inline">
         <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
         <button class="btn  my-2 my-sm-0 bg-primary" type="submit">Search</button>
    </form>
    </div>
  </div>

    <div class="row" style="padding-left: 500px;">
    <div class="col">
      <div class="notifications">
        <i class="fa fa-bell"></i>
        <span class="num">1</span>
         <ul class="top">
          <?php  
                 include_once("../controller/messageController.php");
                 $cf = new message();
                 $r = $cf->messageTrad();
                 foreach ($r as $row){
               echo '
            <li class="icon">
                <span class="icon"><i class="fa fa-user"></i></span>
                <span class="text">'.$row['nom'].''.$row['prenom'].' vous a contacté</span>
            </li>';} ?>
            
         </ul>
      </div>
    </div> 
    </div>
  </nav>
</div>
    
  
        <!-- -->
         <form action="../controller/majController.php" method="POST" enctype="multipart/formdata">
       <?php  
          include_once("../controller/ConnexionTraductController.php");
          $cf = new RecupereDonnee();
          $r = $cf->getData();
          foreach ($r as $row){
      echo '
        <h2 class="mb-0">'.$row['nom'].'
          <span class="text-primary">'.$row['prenom'].'</span>
        </h2>
        <div class="subheading mb-5">
          <a href="mailto:name@email.com">'.$row['email'].'</a>
        </div>
        <div class="col">
          <div class="tab-content">
             <div class="tab-pane active">
                <hr>
                          <div class="row"> 
                          <div class="col-lg">
                               <label for="first_name"  name="nom" >  Nom </label>
                               <input type="text" class="form-control" name="nom" placeholder= '.$row['nom'].' title="enter your first name if any.">
                          </div>
                          <div class="col-lg">
                            <label for="prenom"  name="prenom" >  Prénom 
                             </label>
                              <input type="text" class="form-control" name="prenom" id="last_name" placeholder=' .$row['prenom'].' title="enter your last name if any.">
                          </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                              <label for="email"> Email </label>
                              <input type="email" class="form-control" name="email" id="email" placeholder=' .$row['email'].' title="enter your email.">
                          </div>
                           
                          <div class="col-sm-6">
                             <label for="email"> Numéro de téléphone </label>
                              <input type="text" class="form-control" name="tlphn" id="phone" placeholder=' .$row['tlphn'].'>
                          </div>
                    </div>
                    <div class="row">
                         <div class="col-sm-6">
                             <label for="email"> Numéro de fax </label>
                              <input type="text" class="form-control" name="fax" id="mobile" placeholder=' .$row['fax'].' title="enter your mobile number if any.">
                          </div>
                           <div class="col-sm-6">
                                <label for="email"> Cummune </label>
                              <input type="text" class="form-control" name="commune" placeholder=' .$row['commune'].'>
                          </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                              <label for="email"> Wilaya </label>
                              <input type="text" class="form-control" name="wilaya" placeholder=' .$row['wilaya'].'>
                          </div>
                          <div class="col-sm-6">
                            <label for="email"> Adresse </label>
                              <input type="text" class="form-control" name="adresse" placeholder=' .$row['adresse'].'>
                          </div>
                    </div>
                    <div class="row">
                          <div class="col-sm-6">
                              <label for="email"> Mot de passe </label>
                              <input type="password" class="form-control" name="password1"placeholder=' .$row['mdp'].' title="enter your password.">
                          </div>
                          <div class="col-sm-6">
                              <label for="email"> Nouveau mot de passe </label>
                              <input type="password" class="form-control" name="password" placeholder="nouveau mot de passe" title="Nouveau mot de passe">
                          </div>
                    </div> '; }?>
                      <div class="form-group">
                           <div class="col-sm-12">
                                <br>
                                 <input type="submit" id='submit' value='Enregistrer' class="btn btn-info px-4 rounded-0" >
                                <a href="index.php" class="btn btn-info px-4 rounded-0" data-toggle="modal">Annuler</a>
                                 <input type="submit"  name='deconnecter' value='Se déconnecter' 
                                class="btn btn-info px-4 rounded-0" >
                            </div>
                      </div>          
              <hr>
             </div><!--/tab-pane-->

         </form>
        <!-- -->
  
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Documents à traduire</h2>
         <table class="table table-bordered table-striped table-sm" id="example" width="100%" cellspacing="0">
                  <thead >
                    <tr>
                      <th>Client </th>
                      <th>Email</th>
                      <th>Wilaya</th>
                      <th>document</th>
                      <th>langue d'origine</th>
                      <th>langue source</th>
                      <th>type de traduction</th>
                      <th>demande devis</th>
                      <th>Prix(DZD)</th>
                      <th>Prix accepté</th>
                    </tr>
                  </thead>
                  <tbody id="myTable">
                  <?php  
                 include_once("../controller/messageController.php");
                 
                 $cf = new message();
                 $r = $cf->messageTrad();
                 $req = $cf->getDevis();
                 $rq = $cf->getPrix();
                 $v=$rq->fetch();
                 $m=$req->fetch();
                 foreach ($r as $row ){
               echo '
                    <form action="../controller/prixController.php" method="POST">
                    <tr>
                       
                      <td>'.$row['nom'].' '.$row['prenom'].'</td>
                      <td>'.$row['email'].'</td>
                      <td>'.$row['wilaya'].'</td>
                      <td>'.$m['document'].'</td>
                      <td>'.$m['languesrc'].'</td>
                      <td>'.$m['langue'].'</td>
                      <td>'.$m['type'].'</td>
                      <td>'.$m['devis'].'</td>
                      <td><input class="btn" name="prix" id="prix" type="text" value ='.$v['prixTrad'].'></td>
                      <td>'.$v['prixAccepté'].'</td>
                      <td><input class="btn " name="id" type="hidden" value ='.$v['ID'].'></td>
                      <td>   <input type="submit"  name="envoyer" value="Envoyer" class="btn text-info px-4 rounded-0 envoyer" data-toggle="modal" data-target="#exampleModal"> </td> 
                       </form>  
                    </tr> '; }?>
                  </tbody>
                </table>
      </div>
      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Education</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">University of Colorado Boulder</h3>
            <div class="subheading mb-3">Bachelor of Science</div>
            <div>Computer Science - Web Development Track</div>
            <p>GPA: 3.23</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">August 2006 - May 2010</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0">James Buchanan High School</h3>
            <div class="subheading mb-3">Technology Magnet Program</div>
            <p>GPA: 3.56</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">August 2002 - May 2006</span>
          </div>
        </div>
      
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Skills</h2>

        <div class="subheading mb-3">Programming Languages &amp; Tools</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-angular"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-react"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-node-js"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-sass"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-less"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-wordpress"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-gulp"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-grunt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-npm"></i>
          </li>
        </ul>

        <div class="subheading mb-3">Workflow</div>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            Mobile-First, Responsive Design</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Cross Browser Testing &amp; Debugging</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Cross Functional Teams</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Agile Development &amp; Scrum</li>
        </ul>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5">Interests</h2>
        <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
        <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
      </div>
    </section>

    <hr class="m-0">
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="bootstrap/dist/js/jquery-3.3.1.min.js"></script>
  <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="bootstrap/js/resume.min.js"></script>

</body>

</html>
