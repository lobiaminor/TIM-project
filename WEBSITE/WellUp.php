<?php 
  include 'db.php';
?>

<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TIM | WellUp</title>
    <link rel="shortcut icon" href="imgs\favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tim.css" rel="stylesheet" type="text/css">
    <link href="css/SmartLife.css" rel="stylesheet" type="text/css">
    <script>
      function goBack() {
                        window.history.back();
                    }
    </script>
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


    <ul class="dropdown-menu">
      <li>
        <a href="Assistenza.php">Per categoria</a>
      </li>
      <li>
        <a href="In_Evidenza.php">In evidenza</a>
      </li>
    </ul>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-xs-3" onclick="goBack()">
            <a class="btn btn-primary " href="Salute_e_benessere.php" id="tornaindietro"><span class="glyphicon glyphicon-arrow-left"></span> Torna indietro</a>
          </div>
          <div class="col-xs-3 col-xs-offset-6 hidden-xs hidden-sm">
            <a id="tornaindietro" href="SmartLife.php" class="btn btn-primary ">Torna alle categorie <span class="glyphicon glyphicon-arrow-up"></span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 hidden-xs hidden-sm">
            <table style="width:100%" class="table table-bordered left-table">
              <tbody>
                <tr>
                  <th>
                    <a href="WellUp.php" class="newLink">Descrizione e regole di attivazione</a>
                  </th>
                </tr>
                <tr>
                  <th>
                    <a href="FAQ-WellUp.php" class="newLink">FAQ</a>
                  </th>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-8">
            <div class="text-center nuovaclasse">
              <h1 id="titolo">WellUp</h1>
            </div>
            <p>
              <br>
              <br>Un'app gratuita sviluppata come fosse un diario personale, per disporre
              in ogni momento di tutte
              <br>le informazioni sui controlli medici preventivi da effettuare per sé e
              per tutta la famiglia</p>
            <table style="width:100%">
              <tbody>
                <tr>
                  <th>Per attivare il servizio devi essere registrato e possedere uno smartphone</th>
                </tr>
                <tr>
                  <th>
                    
                    
                    
                   
              <button id="bottonetabella" type="button" class="btn btn-primary text-center" data-toggle="modal" data-target=".bs-example-modal-lg">Attiva subito</button>
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  
                  
                  <form class="form-horizontal">
                      <div class="col-xs-11 text-left">
                        <p style="font-weight: bolder">Dati di fatturazione</p>
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
                      <div class="col-xs-10 col-xs-offset-1">
                        <input class="form-control"  placeholder="Cellulare">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-10 col-xs-offset-1">
                        <input class="form-control"  placeholder="Indirizzo e-mail">
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
                   
                   
                   
                   
                   
                   
                   
                    <button class="btn btn-default" id="bottonetabella" type="submit"><a href="DispositiviCompatibiliWellUp.php">Guarda dispositivi compatibili</a></button>
                  </th>
                </tr>
              </tbody>
            </table>
                  <?php
                    $immagine = getImmagine('wellup');
                      $mydiv = '<div class="img-responsive">';
                      $mydiv .= '<img style="width:70%; padding-top: 100px;" src="'.$immagine['path'].'" />';
                      $mydiv .= '</div>';
                      echo $mydiv;
                  ?>            <div class="col-md-4 hidden-md hidden-lg">
            <table style="width:100%" class="table table-bordered left-table">
              <tbody>
                <tr>
                  <th>
                    <a href="#" class="newLink linknonvalidi">Descrizione e regole di attivazione</a>
                  </th>
                </tr>
                <tr>
                  <th>
                    <a href="#" class="newLink linknonvalidi">FAQ</a>
                  </th>
                </tr>
              </tbody>
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
            <p class="navbar-text">SMART LIFE / SALUTE E BENESSERE / WELL UP /</p>
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