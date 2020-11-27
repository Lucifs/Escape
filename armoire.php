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
        <p>Attention : Pénalité pour chaque essai</p>
        <form method="post" autocomplete="off">
            <div class="form-group">
              <input type="hidden" name="affiches" value="ordi-unlock.php" readonly />
              <input type="number" min="1" max="4" value="1" class="form-control" id="numero" name="numero" aria-invalid="false" autocomplete="off" placeholder="" maxlength="10" required>
            </div>
            <div class="modal-footer">
              <div id="temps_attente"></div>
              <!--<button type="button" class="btn btn-danger" data-dismiss="modal">Access</button> -->
              <input class="btn-sumbit btn-danger btn" name="submit" accesskey="l" value="Access" tabindex="4" type="submit" id="b30">
              <!--<button type="button" class="btn btn-danger" onclick="window.location.href='final.php';">Access</button> -->
            </div>
          </form>
      </div>
    </div>
  </div>
  </div>


<!-- php pour ouvrir le modal locker A -->
  <?php
  if (isset($_POST["numero"])) {
    $numero = $_POST["numero"];
    if ($numero == 2) {
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
    else{
      echo
      '<!-- Modal welcome -->
      <div class="modal fade bd-example-modal-lg" data-animate-in=\'animate__zoomInUp\' data-animate-out=\'animate__flipOutY\' id="welcome_error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-content-dark">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Bienvenue dans la salle du coffre !</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Mauvais choix, attendez 5 min ...
            </div>
          </div>
        </div>
      </div>';

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
    if ($pdfA == "bombe") {
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

<!-- Modal locker B -->
  <div class="modal fade" id="locker2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-content-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Locker B</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body auth">
          <form method="post">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Ce document est protégé par un mot de passe</label>
              <input type="text" inputmode="numeric" class="form-control" id="recipient-name" name="code2" aria-invalid="false" autocomplete="off" placeholder="" maxlength="12" required>
            </div>
            <div class="modal-footer">
              <input class="btn btn-danger btn-submit" name="submit" accesskey="l" value="Ouvrir" tabindex="4" type="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- php pour ouvrir le modal locker B -->
  <?php
  if (isset($_POST["code2"])) {
    $code = $_POST["code2"];
    if ($code == "1664") {
      echo '
    <!-- Modal lockerBcontent -->
    <div class="modal fade" id="lockerBcontent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-dark">
          <img src="images/lockerB.png" alt="" style="width: 100%;" usemap="#map1606411139667">

          <map id="map1606411139667" name="map1606411139667">
            <area shape="rect" coords="487,852,523,952" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#quart1" data-dismiss="modal">
            <area shape="rect" coords="378,909,522,954" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#quart1" data-dismiss="modal">
            <area shape="rect" coords="869,487,950,531" title="Bureau 123 Plot 3" alt="Bureau 123 Plot 3" href="mailto:pascal.denis@centrale-marseille.fr,arthur.louradou@ec-m.fr">
          </map>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
      <script>
      $(document).ready(()=> {
        $("#lockerBcontent").modal("show");
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

<!-- Modal post-it Quart 1-->
  <div class="modal fade" id="quart1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Post-it !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <img src="images/post-it/quart1.png" alt="" style="width: 100%;">
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>

<!-- Modal locker C -->
  <div class="modal fade" id="locker3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-content-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Locker C</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body auth">
          <form method="post">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Ce document est protégé par un mot de passe</label>
              <input type="text" inputmode="numeric" class="form-control" id="recipient-name" name="code3" aria-invalid="false" autocomplete="off" placeholder="" maxlength="12" required>
            </div>
            <div class="modal-footer">
              <input class="btn btn-danger btn-submit" name="submit" accesskey="l" value="Ouvrir" tabindex="4" type="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- php pour ouvrir le modal locker C -->
  <?php
  if (isset($_POST["code3"])) {
    $code = $_POST["code3"];
    if ($code == "8314") {
      echo '
      
  <!-- Modal lockerCcontent -->
    <div class="modal fade" id="lockerCcontent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-dark">
          <audio id="audio_control" controls="true" style="outline: none; height:45px; width: 100%; margin-top:5px; display:none;"><source id="audio" src="uploads/audio.mp3" type="audio/mp3"></audio>
          <img src="images/lockerC.png" alt="" style=" margin-top: -50px; width: 100%;" usemap="#personnalmap">

          <map id="personnalmap" name="personnalmap">
            <area shape="poly" coords="157,695,412,572,446,662,225,850" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#listesansrep" data-dismiss="modal">
            <area shape="poly" coords="406,1011,553,895,568,998,549,948" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#listesansrep" data-dismiss="modal">
            <area shape="poly" coords="255,910,358,1032,319,1053" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#listesansrep" data-dismiss="modal">
            <area shape="poly" coords="727,593,956,556,970,604,1019,599,1075,944,792,989" title="files" alt="" href="uploads/sample_file.pdf" download="IMPORTANTTRESIMPORTANT.pdf">
          </map>
        </div>
      </div>
    </div>

   
    <script type="text/javascript" src="js/jquery.min.js"></script>
      <script>
      $(document).ready(()=> {
        $("#lockerCcontent").modal("show");
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


<!-- Modal liste sans reponse -->
  <div class="modal fade bd-example-modal-lg" id="listesansrep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="height: 90%;">
          <div class="modal-content modal-content-dark" style="height: 100%;">
            <div class="modal-body pdf-body">
                <iframe id="iframe" scrolling="yes" width="100%" id="iframe" src="uploads/ListeSansReponse.pdf" style="height: 580px; max-height: 100%; width: 100%; overflow: auto;"></iframe>
            </div>
          </div>
        </div>
      </div>





<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="largelocker" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Locker qui sert pas à grand chose mais c'est iconique</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/QH2-TGUlwu4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
  $('#lockerBcontent').on('shown.bs.modal', function (e) {
    $('img[usemap]').rwdImageMaps();
  });
  $('#lockerCcontent').on('shown.bs.modal', function (e) {
    $('img[usemap]').rwdImageMaps();
    $('#audio_control')[0].play();
  });
</script>
<!-- message d'erreur locker A -->
<?php 
if (!isset($_GET["hidemessage"])) {
    echo "<script>
    $(document).ready(function(){
        $(\"#welcome_error\").modal('show');
    });
	</script>";
}
?>

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

<script type="text/javascript">

$("#b30").click(()=>{
  $("#b30").hide();
  document.cookie = "stop=true; max-age=300"; // secondes à modifier aussi car sinon au bout de 10s on relance et on a rien
  document.cookie = "time="+Date.now().toString()+";max-age=300";
});

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
var stop = getCookie("stop");
var time = parseInt(getCookie("time"),10); // renvoie le temps de base (dans la base 10)
var deltaT = Date.now() - time; // renvoie le temps écoulé en ms
if (stop == "true"){
  $("#b30").hide();
  setTimeout(() => {  $('#b30').show() },5 * 60 * 1000 - deltaT); // milisecondes
}


if(time != NaN){
  $("#temps_attente").html("Il reste " + (Math.round(300 - deltaT/1000)).toString()+"s à attendre");
}

document.formulaire.submit.disabled=true;
</script>



</body>