<!DOCTYPE html>
<html>

<head>
 	<title>Royalescape - Salle du coffre</title>
 	<meta charset="UTF-8" />
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="css/style-final2.css">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
</head>

<body>

  <!-- Modal ordi -->
  <div class="modal fade" id="ordi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-content-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ordinateur secret de la Casino Royalist'</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body auth">
          <?php
          if (isset($_GET["error"])) {

            echo "<div id=\"msg\" class=\"errors\" style=\"
                                  color: #dc3545;\">
                Mauvais identifiant / mot de passe.
              </div>";
          }


          ?>
          <form action="login.php" method="post" autocomplete="off">
            <input type="hidden" name="URL" value="final2.php" readonly />
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Identifiant</label>
              <input type="text" class="form-control" name="email" value="" placeholder="prenom.nom" required /> <!-- le nom c'est email vu que j'ai la flemme -->
              <label for="recipient-name" class="col-form-label">Mot de passe</label>
              <input type="text" class="form-control" id="recipient-name" name="MotDePasse" aria-invalid="false" autocomplete="off" placeholder="mot de passe" maxlength="10" required>
            </div>
            <div class="modal-footer">
              <input class="btn-sumbit btn-danger btn" name="submit" accesskey="l" value="Access" tabindex="4" type="submit">
            </div>
          </form>
        </div>


      </div>
    </div>
  </div>

<!-- Modal passeport -->
<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="passeport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" style="width: auto; height: 90%;">
    <div class="modal-content modal-content-dark" style="height: 100%;">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calendar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body text-center" style="height: 97%;">
          <img src="images/passeport.png" style="height:100%; max-width: 100%;"  alt="" usemap="#map1606155675407">

          <map id="map1606155675407" name="map1606155675407">
            <area shape="rect" coords="320,141,637,456" title="" alt="" data-dismiss="modal" href="#scrapModal" target="_self" data-toggle="modal" data-target="#post-it">
          </map>

      </div>
    </div>
  </div>
</div>

<!-- Modal SD -->
  <div class="modal fade" id="sd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-content-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Carte SD</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body auth">
          <form method="post">
            <div class="form-group">
              <label class="col-form-label">Contenu non protégé : "trouver_la_bonne_voiture.png"</label>
              <img src="images/voitures.png" style="max-width: 100%;"  alt="" usemap="#map1606155675407">

              <label for="recipient-name" class="col-form-label">Le reste des données est protégé par un mot de passe</label>
              <input type="text" inputmode="numeric" class="form-control" id="recipient-name" name="codeSD" aria-invalid="false" autocomplete="off" placeholder="" maxlength="12" required>
            </div>
            <div class="modal-footer">
              <input class="btn btn-danger btn-submit" name="submit" accesskey="l" value="Ouvrir" tabindex="4" type="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- php pour ouvrir le modal SD -->
  <?php
  if (isset($_POST["codeSD"])) {
    $code = $_POST["codeSD"];
    if ($code == "TT-378-20") {
      echo '
    <!-- Modal Video -->
    <div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-dark">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/JCSbJ4VCud0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin:10px;"></iframe>
          <h5 style="margin:10px;">Description :</h5>
          <p style="margin:10px;">
            111     …     3927     41664     525125 </p>
          <p style="margin-left:10px;">
            Complète cette suite, convertis en minutes, tu trouveras ce que tu cherches dans la vidéo.
          </p>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
      <script>
      $(document).ready(()=> {
        $("#video").modal("show");
      });
      </script>


      ';
    }
    // la suite fait tout bugger
    /*
    else {
      $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
                $extra = 'armoire.php?error';
                header("Location: http://$host$uri/$extra");
    }*/
  }
  ?>

	<div class="fullHeight text-center page">
		<img class="fullHeight" src="images/interieur-coffre.png" usemap="#map1606418198390">

    <map id="map1606418198390" name="map1606418198390">
      <area shape="rect" coords="876,459,1165,671" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#ordi">
      <area shape="rect" coords="587,583,657,674" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#passeport">
      <area shape="rect" coords="657,799,729,838" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#sd">
    </map>
			
	</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.rwdImageMaps.js"></script>
<script type="text/javascript" src="js/jquery.rwdImageMaps.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
    	$('img[usemap]').rwdImageMaps();
    	new ClipboardJS('.btn');
	});

</script>
</body>
