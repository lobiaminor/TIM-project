<?php 
  include 'db.php';
?>

<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TIM | Progetti</title>
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


    <div class="row" style="margin-top: 10; margin-bottom:100">
      <div class="text-center">
        <h1 id="titolo" style="font-size:50">Progetti</h1>
      </div>
    </div>
    <div class="row" style="margin-top: 10; margin-left: 10%;">
      <div class="col-xs-12 col-md-4 col-lg-4 img-responsive" href="#" style="width: 500">
        <a class="thumbnail" href="Chi_Siamo.php">
          
            <div class="text-center">
              <h3 id="titolo">Innovazione</h3>
            </div>
            <?php
             $immagine = getImmagine('innovazione1');
              $mydiv = '<div class="img-responsive">';
              $mydiv .= '<img style="width: 100%;" src="'.$immagine['path'].'" />';
              $mydiv .= '</div>';
              echo $mydiv;
           ?>     
          </a>
      </div>
      <div class="col-xs-12 col-md-4 col-lg-4 img-responsive" style="width: 500">
        <a class="thumbnail" href="Progetti.php">
		<div class="text-center">
              <h3 id="titolo">Progetti</h3>
            </div>
            <?php
             $immagine = getImmagine('progetti1');
              $mydiv = '<div class="img-responsive">';
              $mydiv .= '<img style="width: 100%;" src="'.$immagine['path'].'" />';
              $mydiv .= '</div>';
              echo $mydiv;
           ?>     
    </a>
      </div>
      <div class="col-xs-12 col-md-4 col-lg-4 img-responsive" style="width: 500">
        <a class="thumbnail" href="Testimonials.php">
		<div class="text-center">
              <h3 id="titolo">Testimonials</h3>
            </div>
            <?php
             $immagine = getImmagine('testimonial1');
              $mydiv = '<div class="img-responsive">';
              $mydiv .= '<img style="width: 100%;" src="'.$immagine['path'].'" />';
              $mydiv .= '</div>';
              echo $mydiv;
           ?>     
    </a>
  </div>
</div>


    <div class="carousel slide" id="carousel-example-generic" data-ride="carousel" style="margin-left:5%; margin-right:5%">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-inner" role="listbox">
            <?php
             $immagine = getImmagine('progetti2');
              $mydiv = '<div class="item active">';
              $mydiv .= '<img style="width: 80%;" src="'.$immagine['path'].'" />';
              $mydiv .= '</div>';
              echo $mydiv;

             $immagine = getImmagine('progetti3');
              $mydiv = '<div class="item">';
              $mydiv .= '<img style="width: 80%;" src="'.$immagine['path'].'" />';
              $mydiv .= '</div>';
              echo $mydiv;

            ?>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="sr-only">Previous</span>
	

    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

    <span class="sr-only">Previous</span>

  </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="sr-only">Next</span>
	

    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

    <span class="sr-only">Previous</span>

  </a>
      </div>
    </div>
    <nav class="DocumentList navbar navbar-default" id="navigationbarp">
      <div class="row container-fluid">
        <div class="navbar-header">
          <div class="navbar-brand" style="padding: 0; padding-top: 2;">
            <img src="imgs\LOGO.jpeg" style="max-width:75; border-radius: 10px 10px 10px 10px;">
          </div>
          <div class="navbar-brand" style="padding: 0; padding-top: 1; padding-left: 3px;">
            <p class="navbar-text">CHI SIAMO: PROGETTI /</p>
          </div>
        </div>
      </div>
    </nav>
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
            <ul class="list-unstyled">
              <li id="fbtw">
                <a href="#"><img src="imgs\fb.png" class="img-responsive" id="linknonvalidi"> </a>
              </li>
              <li id="fbtw">
                <a href="#"><img src="imgs\Twitter.png" class="img-responsive" id="linknonvalidi"></a>
              </li>
              <li id="fbtw">
                <a href="#"><img src="imgs\Gplus.svg.png" class="img-responsive" id="linknonvalidi"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="background-image"></div>
      <footer class="section section-primary" id="bluefooter">
        <div class="container">
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
              <div class="row">
                <p class="text-right">Telecom Italia 2012 - P.IVA 00488410010</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  

</body></html>