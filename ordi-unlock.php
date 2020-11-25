<!DOCTYPE html>
<html>

<head>
  <title>Royalescape - Ordinateur de Julie</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style-ordi-unlock.css">
</head>

<body>


  <!-- Modal exit -->
  <div class="modal fade" id="exit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-content-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Exit</h5>
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
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nom de l'organisation :</label>
              <input type="hidden" name="URL" value="ordi-unlock.php" readonly />
              <input type="text" class="form-control" id="recipient-name" name="MotDePasse" aria-invalid="false" autocomplete="off" placeholder="" maxlength="10" required>
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

  <!-- Modal locker -->
  <div class="modal fade" id="locker" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-content-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Locker</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body auth">
          <form method="post">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Ce document est protégé par un mot de passe</label>
              <input type="text" inputmode="numeric" class="form-control" id="recipient-name" name="ip" aria-invalid="false" autocomplete="off" placeholder="" maxlength="12" required>
            </div>
            <div class="modal-footer">
              <input class="btn btn-danger btn-submit" name="submit" accesskey="l" value="Ouvrir" tabindex="4" type="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- php pour ouvrir le modal locker -->

  <?php
  if (isset($_POST["ip"])) {
    $ip = $_POST["ip"];
    if ($ip == "13.59.78.249") {
      echo '
      <!-- Modal locker-content -->
      <div class="modal fade bd-example-modal-lg" id="locker-content" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="height: 90%;">
          <div class="modal-content modal-content-dark" style="height: 100%;">
          <div class="modal-header">
          Contenu du locker
          </div>
            <!-- <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">PDF 1 !</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div> -->
            <div class="modal-body pdf-body">
              <iframe src="uploads/locker-content.png" style="width:100%; height: 100%;"></iframe>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script>
      $(document).ready(()=> {
        $("#locker-content").modal("show");
      });
      </script>
      ';
    }
  }
  ?>




  <!-- Modal decrypt -->
  <div class="modal fade bd-example-modal-lg" id="decrypt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="height: 90%;">
      <div class="modal-content modal-content-dark" style="height: 100%;">
        <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PDF 1 !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
        <div class="modal-body pdf-body">
            <iframe id="iframe" scrolling="yes" width="100%" id="iframe" src="uploads/decrypt_unicode.pdf" style="height: 650px; max-height: 100%; width: 100%; overflow: auto;"></iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal invitation -->
  <div class="modal fade bd-example-modal-lg" id="invitation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="height: 90%;">
      <div class="modal-content modal-content-dark" style="height: 100%;">
        <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PDF 1 !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
        <div class="modal-body pdf-body">
          <iframe src="uploads/invitation_casino.pdf" style="height: 650px; max-height: 100%; width: 100%; overflow: auto;"></iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal neurchi -->
  <div class="modal fade bd-example-modal-lg" id="neurchi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="height: 90%;">
      <div class="modal-content modal-content-dark" style="height: 100%;">
        <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PDF 1 !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
        <div class="modal-body pdf-body">
          <iframe src="uploads/neurchi.png" style="height: 500px; max-height: 100%; width: 100%; overflow: auto;"></iframe>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal echo -->
  <div class="modal fade bd-example-modal-lg" id="echo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="height: 90%;">
      <div class="modal-content modal-content-dark" style="height: 100%;">
        <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PDF 1 !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
        <div class="modal-body pdf-body">
          <iframe src="https://classrooms.centrale-marseille.fr/html5client/join" style="height: 650px; max-height: 100%; width: 100%; overflow: auto;"></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="fullHeight text-center">
    <img class="fullHeight" src="images/ordi-wallpaper.png" usemap="#map1605806144163" draggable="false">

    <map id="map1605806144163" name="map1605806144163">
      <area shape="rect" coords="17,0,37,22" title="" alt="" href="https://apple.com/fr/" target="_self">
      <area shape="rect" coords="1054,35,1120,101" title="" alt="" href="uploads/sample_file.pdf" download="IMPORTANTTRESIMPORTANT.pdf">
      <area shape="rect" coords="1183,29,1241,101" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#exit">
      <area shape="rect" coords="1060,140,1112,214" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#decrypt">
      <area shape="rect" coords="1186,141,1238,213" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#invitation">
      <area shape="rect" coords="1053,253,1119,318" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#echo">
      <area shape="rect" coords="1184,251,1238,326" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#neurchi">
      <area shape="rect" coords="1179,362,1249,437" title="" alt="" href="#scrapModal" target="_self" data-toggle="modal" data-target="#locker">
    </map>
  </div>











  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.rwdImageMaps.js"></script>
  <script type="text/javascript" src="js/jquery.rwdImageMaps.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  <script type="text/javascript" src="js/ordi-script.js"></script>
  <script type="text/javascript">
    $(document).ready(function(e) {
      $('img[usemap]').rwdImageMaps();
    });
  </script>
</body>