<!DOCTYPE html>
<html>

<head>
 	<title>Royalescape - Salle du coffre</title>
 	<meta charset="UTF-8" />
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="css/style-armoire.css">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
<!-- audio qui se lance au début -->
<audio id="audio_control" controls="true" style="outline: none; height:45px; width: 100%; margin-top:5px; display:none;"><source id="audio" src="uploads/audio2.mp3" type="audio/mp3"></audio>
<!-- Modal welcome -->
<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="welcome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bienvenue dans la salle du coffre !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ce message t'est addressé car tu en as fini avec l'ordinateur de Julie. Tu te retrouves donc dans cette ultime salle.
      </div>
      <div class="modal-body">
            <p class="card-title">Envoie ce lien à tes collègues pour qu'ils te rejoignent :</p>
            <div class="input-group mb-3">
	            <?php
	            echo "<input type=\"text\" id=\"clipboardExample1\" class=\"form-control\" value=\"http://".$_SERVER['HTTP_HOST']."/final.php?hidemessage\">"
	            ?>
	            <div class="input-group-append">
	            	<button type="button" class="btn btn-success btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardExample1">
	            		Copy
	            	</button>
	            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal main -->
<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="main" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Coffre fort</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="modal-body auth text-center">
      		<div class="text-center">🎬 Timecode</div>

      	</div>
        <form action="login.php" method="post">
          <input type="hidden" name="URL" value="final.php" readonly />
          <div class="modal-body auth">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Ce coffre est protégé par un code à quatre chiffres</label>
              <input 
                        type="text"
                        pattern="[0-9][0-9][0-9][0-9]"
                        inputmode="numeric"
                        class="form-control"
                        id="recipient-name"
                        name="MotDePasse"
                        aria-invalid="false"
                        autocomplete="off"
                        placeholder="0000"
                        maxlength="10"
                        required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input class="btn btn-light btn-submit" name="submit" accesskey="l" value="Unlock" tabindex="4" type="submit">
        </div>
      </form>
    </div>
  </div>
</div>



	<div class="fullHeight text-center page">
		<img class="fullHeight" src="images/final.jpg" usemap="#map1606084233395">

		<map id="map1606084233395" name="map1606084233395">
			<area shape="rect" coords="977,728,1134,811" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#main">
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
<script type="text/javascript">
$(document).mouseover(()=>{
$('#audio_control')[0].play();
});
</script>
<?php 
if (!isset($_GET["hidemessage"])) {
    echo "<script>
    $(document).ready(function(){
        $(\"#welcome\").modal('show');
    });
	</script>";
}
?>
</body>
