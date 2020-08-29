 <!DOCTYPE html>
 <html lang="fr">

 <head>
   <meta charset="UTF-8">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <title>
    Vans X loaded EVENTS
   </title>

   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="../materialize/css/materialize.min.css">

   <link rel="stylesheet" href="../css_lib/mdstyle.css">

   <link rel="stylesheet" href="../css_fuji/vans_.css">

 </head>

 <body>

   <!-- On crée une barre de navigation -->
   <div class="navbar-fixed">
   <nav class="text-center">
      <div class="nav-wrapper black ">
          <a href="#!" class="brand-logo center"><img src="vans_img/logo.jpg" height="45" width="60" alt=""></a>

        <a href="index.html" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">dehaze</i></a>
        <ul class="right hide-on-med-and-down text-center">
          <li><a href="index.html">accueil</a></li>
          <li><a href="#heure">programme</a></li>
          <li><a href="#formulaire">s'inscrire</a></li>
          <li><a href="#">Mobile</a></li>
        </ul>
      </div>
    </nav>


   </div>
 <!-- /.fixed-navbar  -->

 <ul class="sidenav red darken-3 sidenav-close"red darken-3 id="mobile-demo">
   <li ><a href="index.html">accueil</a></li>
   <li><a href="#heure">programme</a></li>
   <li><a href="#formulaire">s'inscrire</a></li>
   <li><a href="mobile.html">contact</a></li>
 </ul>
  <!-- On crée une "boite" pour contenir les éléments de la page sur fond blanc cassé -->
  <div id="conteneur_principal">



 <div class="row">
   <div class="col s6">

   </div>
   <!-- /.col s6 -->

   <div class="col s6">

     <h4>
       Réponse au formulaire
     </h4>
     <p>
       <?php

       include 'onSecuriseForm.php';
       // On créer 2 variables
       // On les initialise
       // On initialise $texte_crypte à null car elle ne contient rien au départ.
      // On crée des variables pour récupérer les informations envoyées depuis le formulaire
//et stocké dans superglobale $_POST[]; ATTENTION !!! Ces données ne sont pas sécurisées,
// elles peuvent contenir du code malveillant (cf faille XSS(crosse site script))
       $nom_envoye = $_POST["nom_a_envoyer"];
       // $prenom_envoye = $_POST["prenom_a_envoyer"];
       // $adresse_envoye = $_POST["adresse_a_envoyer"];
       // $tel_envoye = $_POST["tel_a_envoyer"];

       $nom_securise = securiserDatas($nom_envoye);




       $texte_a_afficher = ' merci pour votre inscription.';

       echo $nom_securise.$texte_a_afficher;


       echo "<br>";



        ?>

     </p>
   </div>
   <!-- /.col s6 -->
 </div>
 <!-- /.row -->

 </div>
 <!-- / div#conteneur principal -->

   <script src="../jquery/jquery-3.4.1.min.js"></script>

 <script src="../materialize/js/materialize.min.js"></script>

   <script src="../js/mes_scripts.js"></script>

 </body>

 </html>
