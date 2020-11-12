<?php
$xml = simplexml_load_file('source.xml');
$page = intval((!empty($_GET['action'])) ? $_GET['action']-1 : 0);
$title = $xml->page[$page]->title;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title><?= $title; ?></title>
  <link rel="shortcut icon" type="image/png" href="assets/img/favicon2.ico"/>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="index.php"><div><p id="logo"><i class="fas fa-building"></i> Ocordo</p></div></a>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <?php
          $i = 0;
          foreach ($xml as $key) { ?>
            <li class="nav-item active mr-5">
              <a class="nav-link " href="<?= $key['id']; ?>.html"><?php echo $xml->page[$i]->menu; ?><span class="sr-only">(current)</span></a>
            </li>
          <?php    $i++; } ?>
        </ul>
      </div>
    </nav>
    <div class="row" id="bann">
      <div class="col-md-8 col-lg-5 ml-5 mt-3" id="bann_presentation"><p>Entreprise de batiment à Amiens<br/>Renovation de maison<br/>Extension de maison</p></div>
      <a href="#"><div id="button_dev">Devis gratuit</div></a>
    </div>
    <div class="blok">
    <?=$xml->page[$page]->content; ?>
  </div>
  <div class="row justify-content-center mt-4 blok_legend">
    <div class="col-3 text-center">
      <img src="/assets/img/devis-gratuit_grey.png"><p class="legend">Devis gratuits</p>
    </div>
    <div class="col-3 text-center">
      <img src="/assets/img/proximite_grey.png"><p class="legend">Entreprise de proximité</p>
    </div>
    <div class="col-3 text-center">
      <img src="/assets/img/qualite_prix_grey.png"><p class="legend">Meilleur rapport qualité/prix</p>
    </div>
    <div class="col-3 text-center">
      <img src="/assets/img/satisfaction_grey.png"><p class="legend">Satisfaction clients</p>
    </div>
  </div>
  <footer>
      <div class="container-fluid">            <!--Partie contact-->
      <div class="row justify-content-center">
          <div class="col-md-4">
               <h3 class="text-center">- Nous contacter -</h3>
              <div class="d-flex justify-content-around">
                  <div class="text-left align">
                      <p>Ocordo Travaux Amiens</p>
                      <p>31 Rue Alexandre</p>
                      <p>80000 AMIENS</p>
                      <p>Tel : +33 (0)3 22 72 22 22</p>
                      <p>Email : contact@ocordo-travaux.fr</p>
                  </div>
              </div>
          </div>
          <!--Partie description-->
               <div class="d-flex col-md-4">
                  <div class="m-auto">
                       <p>Entreprises de travaux de gros oeuvre et travaux de second oeuvre
                    Ocordo Travaux Amiens est une agence de travaux spécialisée dans l’externalisation
                    du service commercial d’entreprises locales du bâtiment d'Amiens spécialisées
                      dans les travaux de rénovation et de construction d’extensions.
                      Nous avons l’expérience de plus de 3.000 projets de rénovations de maisons, rénovations
                      d’appartements et de constructions d’extensions de maisons.</p>
               </div>
                </div>
              <div class="col-md-4 align">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2570.7443770473383!2d2.2985257513962005!3d49.88482683573779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e784451be8e5ef%3A0x92d0c6ec59460638!2s31%20Rue%20Alexandre%2C%2080000%20Amiens!5e0!3m2!1sfr!2sfr!4v1578558018561!5m2!1sfr!2sfr" width="400" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/16ce2e3750.js" crossorigin="anonymous"></script>
  </body>
  </html>
