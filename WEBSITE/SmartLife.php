<?php 
  include 'db.php';
?>

<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TIM | SmartLife</title>
    <link rel="shortcut icon" href="imgs\favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tim.css" rel="stylesheet" type="text/css">
  </head><body>

<!--Barra superiore-->
    <nav id="landmark" class="navbar navbar-inverse" >
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-left">
      <li>
        <a href="index.php" style="padding:0px">
            <?php
             $immagine = getImmagine('logotim');
              $mydiv = '<div class="img-responsive">';
              $mydiv .= '<img style="width: 100%; max-width: 87;" src="'.$immagine['path'].'" />';
              $mydiv .= '</div>';
              echo $mydiv;
           ?>     
        </a>
      </li>
      <li><a href="#" id="linknonvalidi">Il gruppo</a></li> 
      <li><a href="Chi_Siamo.php">Chi siamo</a></li> 
      <li class="dropdown" >
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Dispositivi
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Dispositivi.php">Per categoria</a></li>
          <li><a href="Promozioni.php">Promozioni</a></li>
        </ul>
      </li>
            <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Smart Life
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="SmartLife.php">Per categoria</a></li>
        </ul>
      </li>
            <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Assistenza
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Assistenza.php" >Per categoria</a></li>
          <li><a href="In_Evidenza.php" >In evidenza</a></li>
        </ul>
      </li>
    </ul>
     <ul class="hidden-xs nav navbar-nav navbar-right">   
      <li><a href="#" id="linknonvalidi"><span class="glyphicon glyphicon-envelope" aria-hidden="true"> Mail</span></a></li> 
      <li><a href="#" id="linknonvalidi"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"> Carrello</span></a></li> 
    </ul>
  </div>
</nav>
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1>SmartLife</h1>
        <p class="lead">Scopri tutto il nuovo mondo connesso di TIM</p>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <ul id="dispositivi" class="list-inline text-center">
          <li>
            <a href="Casa_e_famiglia.php">

            <img src="imgs\smartlife\casa e famiglia.PNG" id="linksimg" class="img-responsive">

              </a>
          </li>
          <li>
            <a href="Salute_e_benessere.php">

            <img src="imgs\smartlife\salute e benessere.PNG" class="img-responsive" id="linksimg">

              </a>
          </li>
          <li>
            <a href="Servizi_alla_persona.php">

            <img src="imgs\smartlife\servizi alla persona.PNG" class="img-responsive" id="linksimg">

              </a>
          </li>
          <li>
            <a href="TV_entertainment.php">

            <img src="imgs\smartlife\tv e entertainment.PNG" class="img-responsive" id="linksimg">

              </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container" id="minibanner" style="margin-top: 50px; padding-right: 100%;">
      <div class="row"></div>
    </div>
    
<!--SiteMap-->
    <nav class="navbar navbar-default" id="navigationbarp">
      <div class="container-fluid">
        <div class="navbar-header" style="float: none">
          <div>

                  <?php
                    $immagine = getImmagine('logotim');
                      $mydiv = '<div class="navbar-brand hidden-xs">';
                      $mydiv .= '<img style="margin-top: 3; width:100%; max-width:75; border-radius: 10px 10px 10px 10px;" src="'.$immagine['path'].'" />';
                      $mydiv .= '</div>';
                      echo $mydiv;
                  ?>  

          </div>
          <div class="navbar-brand" style="padding: 0; padding-top: 1; padding-left: 3px;">
            <p class="navbar-text">SMARTLIFE /</p>
          </div>
        </div>
      </div>
    </nav>



<!--Footer-->
    <div class="section" id="footlinks">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h4>INFORMAZIONI UTILI</h4>
            <ul>
              <li>
                <p>Come pagare il conto</p>
              </li>
              <li>
                <p>Carta dei servizi</p>
              </li>
              <li>
                <p>ViviTIM</p>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4>STRUMENTI VELOCI</h4>
            <ul>
              <li>
                <p>Ricarica Online</p>
              </li>
              <li>
                <p>Verifica Copertura</p>
              </li>
              <li>
                <p>Trova Negozio</p>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <p>SEGUICI SU:</p>
            <ul class="list-unstyled" >
              <li id="fbtw" class="linknonvalidi">
                <a href="#">
                  <?php
                    $immagine = getImmagine('facebook');
                      $mydiv = '<div class="img-responsive">';
                      $mydiv .= '<img style="width: 100%;" src="'.$immagine['path'].'" />';
                      $mydiv .= '</div>';
                      echo $mydiv;
                  ?>  
                </a>
              </li>
              <li id="fbtw" class="linknonvalidi">
                <a href="#">
                  <?php
                    $immagine = getImmagine('twitter');
                      $mydiv = '<div class="img-responsive">';
                      $mydiv .= '<img style="width: 100%;" src="'.$immagine['path'].'" />';
                      $mydiv .= '</div>';
                      echo $mydiv;
                  ?>  
                </a>
              </li>
              <li id="fbtw" class="linknonvalidi">
                <a href="#">
                  <?php
                    $immagine = getImmagine('google');
                      $mydiv = '<div class="img-responsive">';
                      $mydiv .= '<img style="width: 100%;" src="'.$immagine['path'].'" />';
                      $mydiv .= '</div>';
                      echo $mydiv;
                  ?>  
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
      <footer class="section section-primary" id="bluefooter">
          <div class="row">
            
            <div class="col-md-8 col-sm-6">
              
              <div class="col-sm-2">
                <p>Privacy</p>
              </div>
              
              <div class="col-sm-2 text-left">
                <p>Note legali</p>
              </div>
              
              <div class="col-sm-2 text-left">
                <p>Website info</p>
              </div>
              
              <div class="col-sm-2 text-left">
                <p>Contatti</p>
              </div>
              
              <div class="col-sm-3">
                <p class="text-left">Per i consumatori</p>             
              </div>

            </div>

            <div class="col-sm-6 col-md-3">
                <p class="text-right">Telecom Italia 2012 - P.IVA 00488410010</p>
            </div>

          </div>

      </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body></html>