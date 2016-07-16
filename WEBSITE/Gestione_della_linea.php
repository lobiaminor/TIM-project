<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TIM | Gestione della linea</title>
    <link rel="shortcut icon" href="imgs\favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tim.css" rel="stylesheet" type="text/css">

    <script>
    function goBack() {
        window.history.back();
    }
  </script>

  </head><body>
    <!--Barra superiore-->
    <nav id="landmark" class="navbar navbar-inverse">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-left">
          <li>
            <a href="index.php" style="padding:0px"><img src="imgs\LOGO.jpeg" class="img-responsive" style="max-width:87; "></a>
          </li>
      <li><a href="#" id="linknonvalidi">Il gruppo</a></li> 
          <li>
            <a href="Chi_Siamo.php">Chi siamo</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dispositivi

        <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li>
                <a href="Dispositivi.php">Per categoria</a>
              </li>
              <li>
                <a href="Promozioni.php">Promozioni</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart Life

        <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li>
                <a href="SmartLife.php">Per categoria</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Assistenza

        <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li>
                <a href="Assistenza.php">Per categoria</a>
              </li>
              <li>
                <a href="In_Evidenza.php">In evidenza</a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="hidden-xs nav navbar-nav navbar-right">
          <li>
            <a href="#" id="linknonvalidi"><span class="glyphicon glyphicon-envelope" aria-hidden="true"> Mail</span></a>
          </li>
          <li>
            <a href="#" id="linknonvalidi"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"> Carrello</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-xs-3" onclick="goBack()">
            <a id="tornaindietro"  class="btn btn-primary "><span class="glyphicon glyphicon-arrow-left"></span> Torna ai servizi</a>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="titolo" class="text-center">
              <h1>Gestione della linea</h1>
            </div>
            <p contenteditable="true">Richiedere l'attivazione di una linea telefonica di casa è molto semplice,
              puoi:
              <br>
              <br>- richiederla online
              <br>- chiamare il Servizio Clienti linea fissa 187
              <br>- recarti presso un Negozio TIM
              <br>
              <br>Verifica la modalità di attivazione consultando on line le varie offerte
              disponibili.
              <br>
              <br>
              <br>I dati necessari sono:
              <br>
              <br>- nome e cognome
              <br>- codice fiscale
              <br>- indirizzo dell'abitazione per cui richiedi l'installazione della linea
              <br>- un recapito telefonico di cellulare
              <br>- indirizzo email (facoltativo)
              <br>
              <br>Il nostro personale tecnico ti contatterà quanto prima per concordare
              l'appuntamento per l'installazione.</p><br>
          <button id="botteneform" type="button" class="btn btn-primary text-center" data-toggle="modal" data-target=".bs-example-modal-lg">Attiva subito</button>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  
                  
                  <form class="form-horizontal">
                      <div class="col-xs-11 text-left">
                        <p style="font-weight: bolder">Dati d fatturazione</p>
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
                      <div class="col-xs-2 col-xs-offset-1">
                        <input class="form-control"  placeholder="CAP">
                      </div>
                    </div>
                      <div class="col-xs-11 text-left">
                        <p style="font-weight: bolder">Comunicazione</p>
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
                      <div class="col-xs-1 col-xs-offset-8 text-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annulla</button>
                      </div>
                      <div class="col-xs-2">
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Conferma</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>
          </div>
            <img src="imgs\in_evidenza\gestione_linea.png" class="img-responsive" style="padding-top: 100px;">
          </div>
        </div>
      </div>
    </div>
    <!--SiteMap-->
    <nav class="navbar navbar-default" id="navigationbarp">
      <div class="container-fluid">
        <div class="navbar-header">
         <div class="navbar-brand" style="padding: 0; padding-top: 2;">
            <img src="imgs\LOGO.jpeg" style="max-width:75; border-radius: 10px 10px 10px 10px;">
          </div>
          <div class="navbar-brand" style="padding: 0; padding-top: 1; padding-left: 3px;">
            <p class="navbar-text">IN EVIDENZA / GESTIONE DELLA LINEA /</p>
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
            <ul class="list-unstyled">
              <li id="fbtw">
                <a href="#" ><img src="imgs\fb.png" class="img-responsive" id="linknonvalidi"> </a>
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