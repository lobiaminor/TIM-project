<?php 
  include 'db.php';
?>

<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TIM | IPhone6</title>
    <link rel="shortcut icon" href="imgs\favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tim.css" rel="stylesheet" type="text/css">
    <link href="css/SmartLife.css" rel="stylesheet">
    <link href="css/orientation.css" rel="stylesheet" type="text/css">
    <link href="css/dispositivi.css" rel="stylesheet" type="text/css">

  <script>
    function goBack() {
        window.history.back();
    }
  </script>
  </head>
  <body>

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




    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-xs-3" onclick="goBack()">
            <a id="tornaindietro"  class="btn btn-primary "><span class="glyphicon glyphicon-arrow-left"></span> Torna indietro</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 text-center">

            <?php
             $dispositivo = getDispositivo('iphone');
              $mydiv = '<div class="img-responsive align-center dispositivoimg">';
              $mydiv .= '<img style="width: 100%;" src="'.$dispositivo['path'].'" />';
              $mydiv .= '</div>';
              echo $mydiv;
           ?>     


          <p id="prezzo" class="text-center">
                  <?php
                    $dispositivo = getDispositivo('iphone');
                    echo $dispositivo["prezzo"]  . " €"; 
                  ?>
          </p>    


        
<!-- FORM ACQUISTO inizio-->
          <button id="botteneform" type="button" class="btn btn-primary text-center" data-toggle="modal" data-target=".bs-example-modal-lg">Acquista subito</button>         
          
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  
                  
                  <form class="form-horizontal">
                      <div class="col-xs-11 text-left">
                        <p style="font-weight: bolder">Indirizzo di spedizione</p>
                      </div>
                    <div class="form-group" style="margin-top: 10px">
                      <div class="col-xs-4 col-xs-offset-1">
                        <input class="form-control"  placeholder="Nome">
                      </div>
                      <div class="col-xs-6">
                        <input class="form-control"  placeholder="Cognome">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-3 col-xs-offset-1">
                        <input class="form-control"  placeholder="Prefisso">
                      </div>
                      <div class="col-xs-7">
                        <input class="form-control"  placeholder="Telefono principale">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-10 col-xs-offset-1">
                        <input class="form-control"  placeholder="Nome società (facoltativo)">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-10 col-xs-offset-1">
                        <input class="form-control"  placeholder="Via e numero civico">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-10 col-xs-offset-1">
                        <input class="form-control"  placeholder="Codice di ingresso, interno, piano ecc. (facoltativo)">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-10 col-xs-offset-1">
                        <input class="form-control"  placeholder="Ulteriori informazioni sull'indirizzo (facoltativo)">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-4 col-xs-offset-1">
                        <input class="form-control"  placeholder="Nazione">
                      </div>
                      <div class="col-xs-6">
                        <input class="form-control"  placeholder="Città">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-3 col-xs-offset-1">
                        <input class="form-control"  placeholder="CAP">
                      </div>
                    </div>
                      <div class="col-xs-11 text-left">
                        <p style="font-weight: bolder">Notifiche di spedizione</p>
                      </div>
                    <div class="form-group">
                      <div class="col-xs-10 col-xs-offset-1">
                        <input class="form-control"  placeholder="Indirizzo e-mail (facoltativo)">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-10 col-xs-offset-1">
                        <input class="form-control"  placeholder="Cellulare (facoltativo)">
                      </div>
                    </div>
                      <div class="col-xs-11 text-left">
                        <p style="font-weight: bolder">Per modificare il metodo di pagamento clicca <a href="#" id="linknonvalidi">qui</a></p>
                      </div>
                    <div class="form-group">
                      <div class="col-xs-2 col-xs-offset-1 col-sm-2 col-sm-offset-6">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annulla</button>
                      </div>
                      <div class="col-xs-2 col-xs-offset-4 col-sm-2 col-sm-offset-0">
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Conferma</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div>

<!-- FORM ACQUISTO fine-->


          <div class="col-md-4">
                <h4>
                  <?php
                    $dispositivo = getDispositivo('iphone');
                    echo $dispositivo["marca"]; 
                  ?>
                </h4>
                <h4>
                  <?php
                    $dispositivo = getDispositivo('iphone');
                    echo $dispositivo["nome"]; 
                  ?>
                </h4>
                <table style="width:100%; margin-top:10px" class="table table-bordered left-table">
                  <tr>
                    <th>Descrizione</th>
                 </tr>
                 <tr>
                    <th class="plainText">
                      <?php
                        $dispositivo = getDispositivo('iphone');
                        echo $dispositivo["descrizione"]; 
                      ?>
                    </th>
                 </tr>
                  <tr>
                    <th>Scheda tecnica</th>
                 </tr>
                 <tr>
                    <th class="plainText">
                      <?php
                        $dispositivo = getDispositivo('iphone');
                        echo $dispositivo["scheda_tecnica"]; 
                      ?>
                  </th>
                 </tr>
              </table>
              <a href="IPhoneServiziSmartLife.php"><strong>Visualizza servizi Smart Life disponibili</strong></a>
            </div>

             <div class="col-sm-4">
              <h4>Indice servizi di assistenza</h4>
              <table style="width:100%; margin-top:10px" class="table table-bordered left-table">
                  <tr>
                    <th>
                    <a href="Scopri_timgames.php">TIM Games</a><br>
                    </th>
                  </tr>
              </table>
          </div>

        </div>
    </div>
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
            <p class="navbar-text">DISPOSITIVI / SMARTPHONE E TELEFONI / IPHONE6 /</p>
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