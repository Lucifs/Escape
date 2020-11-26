<!DOCTYPE html>
<html>

<head>
  <title>Escape</title>
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

<!-- Modal Casier A -->
<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="locker1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Locker A</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="images/7diff.png" style="width: 100%;" alt="" usemap="#map1606346709645">
          <map id="map1606346709645" name="map1606346709645">
            <area shape="rect" coords="177,265,219,307" id="complete1" title="" alt="" href="#scrapModal" target="_self" onclick="document.getElementById('numero').value = 1;">
            <area shape="rect" coords="460,268,501,307" id="complete2" title="" alt="" href="#scrapModal" target="_self" onclick="document.getElementById('numero').value = 2;">
            <area shape="rect" coords="730,263,774,306" id="complete3" title="" alt="" href="#scrapModal" target="_self" onclick="document.getElementById('numero').value = 3;">
            <area shape="rect" coords="1005,267,1040,307" id="complete4" title="" alt="" href="#scrapModal" target="_self" onclick="document.getElementById('numero').value = 4;">
          </map>
        <div class="modal-body auth">
          
            <div class="form-group">
              <label for="recipient-name" class="col-form-label"><!-- 
                <?php echo date('M j');?> -->
                <?php
                if (isset($_GET["error"])) {

                  echo "<p id=\"demo\"></p>";
                }
                ?>
              </label>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <form method="post" autocomplete="off">
            <div class="form-group">
              <input type="hidden" name="affiches" value="ordi-unlock.php" readonly />
              <input type="text" class="form-control" id="numero" name="numero" aria-invalid="false" autocomplete="off" placeholder="" maxlength="10" required>
            </div>
            <div class="modal-footer">
              <!--<button type="button" class="btn btn-danger" data-dismiss="modal">Access</button> -->
              <input class="btn-sumbit btn-danger btn" name="submit" accesskey="l" value="Access" tabindex="4" type="submit">
              <!--<button type="button" class="btn btn-danger" onclick="window.location.href='final.php';">Access</button> -->
            </div>
          </form>
      </div>
    </div>
  </div>
</div>

<!-- php pour ouvrir le modal locker -->
<?php
  if (isset($_POST["numero"])) {
    $numero = $_POST["numero"];
    if ($numero == "2") {
      echo '
      <!-- Modal lockerAcontent -->
      <div class="modal fade" id="lockerAcontent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-dark">
          <img src="images/lockerA.png" alt="" style="width: 100%;" usemap="#map1606349426750">

          <map id="map1606349426750" name="map1606349426750">
            <area shape="rect" coords="706,477,1037,952" data-dismiss="modal" href="#scrapModal" target="_self" data-toggle="modal" data-target="#liseuse">
          </map>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
      <script>
      $(document).ready(()=> {
        $("#lockerAcontent").modal("show");
      });
      </script>


      ';
    }
    else {
      $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
                $extra = 'armoire.php?error';
                header("Location: http://$host$uri/$extra");
    }
  }
  ?>

<!-- Modal liseuse -->
  <div class="modal fade" id="liseuse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-content-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Liseuse verrouillée</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body auth">
          <?php
          if (isset($_GET["error2"])) {

            echo "<div id=\"msg\" class=\"errors\" style=\"
                                  color: #dc3545;\">
                Mauvais identifiant / mot de passe.
              </div>";
            echo '<script type="text/javascript" src="js/jquery.min.js"></script>
                  <script>
                  $(document).ready(()=> {
                    $("#liseuse").modal("show");
                  });
                  </script>';
          }
          ?>
          <form method="post" autocomplete="off">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Mot de passe :</label>
              <input type="hidden" name="URL" value="armoire.php" readonly />
              <input type="text" class="form-control" id="pdfA" name="pdfA" aria-invalid="false" autocomplete="off" placeholder="" maxlength="10" required>
            </div>
            <div class="modal-footer">
              <input class="btn-sumbit btn-danger btn" name="submit" accesskey="l" value="Access" tabindex="4" type="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



<!-- Modal pdfA -->
<?php
  if (isset($_POST["pdfA"])) {
    $pdfA = $_POST["pdfA"];
    if ($pdfA == "bomb") {
      echo '
      <div class="modal fade bd-example-modal-lg" id="fichierA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="height: 90%;">
          <div class="modal-content modal-content-dark" style="height: 100%;">
            <div class="modal-body pdf-body">
                <iframe id="iframe" scrolling="yes" width="100%" id="iframe" src="uploads/fichierA.pdf" style="height: 650px; max-height: 100%; width: 100%; overflow: auto;"></iframe>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script>
      $(document).ready(()=> {
        $("#fichierA").modal("show");
      });
      </script>
      ';
    }
    else {
      $host = $_SERVER['HTTP_HOST'];
      $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
      header("Location: http://$host$uri/armoire.php?error2");
    }
  }
  ?>



<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="locker2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Locker B</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ceci est le corps du locker B
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>






<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="locker3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Locker C</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ceci est le corps du locker C
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="largelocker" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Locker</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ceci est le corps du locker large
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>






	<div class="fullHeight text-center page">
		<img class="fullHeight" src="images/armoire.png" usemap="#map1605965744173">
		
			<map id="map1605965744173" name="map1605965744173">
				<area shape="rect" coords="1160.9999752128906,494.99146080859373,1305.0113392128906,666.0028248085937" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#locker1">
				<area shape="rect" coords="1161.0000057304687,668.997137078125,1305.0113697304687,847.0085010781249" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#locker2">
				<area shape="rect" coords="1156.97917,846.9792005175782,1306.3125100000002,1197.3125405175783" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#locker3">
				<area shape="rect" coords="1063.0000440234376,820.9999829882813,1125.3333840234375,871.3333229882813" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#largelocker">
			</map>
	</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.rwdImageMaps.js"></script>
<script type="text/javascript" src="js/jquery.rwdImageMaps.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
    	$('img[usemap]').rwdImageMaps();
	});
  $('#locker1').on('shown.bs.modal', function (e) {
    $('img[usemap]').rwdImageMaps();
  });
  $('#lockerAcontent').on('shown.bs.modal', function (e) {
    $('img[usemap]').rwdImageMaps();
  });
</script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Nov 27 , 2020 <?php if (isset($_GET["countdown"])) {echo ($_GET["countdown"]);}?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
