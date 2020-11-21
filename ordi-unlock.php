<!DOCTYPE html>
<html>

<head>
  <title>Escape</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
	        <form>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Exit with :</label>
	            <input 
                        type="text"
                        pattern=""
                        inputmode="numeric"
                        class="form-control"
                        id="recipient-name"
                        name="organisation-name"
                        aria-invalid="false"
                        autocomplete="off"
                        placeholder=""
                        maxlength="10"
                        required>
	          </div>
	       </form>
	      </div>

      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Access</button> -->
        <button type="button" class="btn btn-danger" onclick="window.location.href='final.php';">Access</button>
        
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
	        <form>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Ce document est protégé par un mot de passe</label>
	            <input 
                        type="text"
                        pattern=""
                        inputmode="numeric"
                        class="form-control"
                        id="recipient-name"
                        name="organisation-name"
                        aria-invalid="false"
                        autocomplete="off"
                        placeholder=""
                        maxlength="10"
                        required>
	          </div>
	       </form>
	      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" href="#scrapModal" target="_self"data-toggle="modal" data-target="#locker-content">Unlock</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal locker-content -->
<div class="modal fade" id="locker-content" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Locker content</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body auth">
	        <form>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Document déverouillé</label>
	          </div>
	       </form>
	      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal traquenard -->
<div class="modal fade" id="traquenard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">traquenard</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
          <ul class="list-group">
            <li class="list-group-item" style="background-color: black;">Dapibus ac facilisis in</li>
            <li class="list-group-item" style="background-color: black;"><a href="file.pdf" download="IMPORTANTTRESIMPORTANT.pdf">Cliquer ici</a></li>
            <li class="list-group-item" style="background-color: black;">Porta ac consectetur ac</li>
          </ul>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" href="#scrapModal" target="_self"data-toggle="modal" data-target="#locker-content">Unlock</button>
      </div>
    </div>
  </div>
</div>

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
        <iframe src="uploads/decrypt_unicode.pdf" style="width:100%; height: 100%;"></iframe>
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
        <iframe src="uploads/invitation_casino.pdf" style="width:100%; height: 100%;"></iframe>
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
        <iframe src="uploads/neurchi.png" style="width:100%; height: 100%;"></iframe>
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
        <iframe src="https://classrooms.centrale-marseille.fr/html5client/join" style="width:100%; height: 100%;"></iframe>
      </div>
    </div>
  </div>
</div>

	<div class="fullHeight text-center">
		<img class="fullHeight" src="images/ordi-wallpaper.png" usemap="#map1605806144163" draggable="false">

		<map id="map1605806144163" name="map1605806144163">
			<area shape="rect" coords="17,0,37,22" title="" alt="" href="https://apple.com/fr/" target="_self">
			<area shape="rect" coords="1054,35,1120,101" title="" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#traquenard">
			<area shape="rect" coords="1183,29,1241,101" title="" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#exit">
			<area shape="rect" coords="1060,140,1112,214" title="" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#decrypt">
			<area shape="rect" coords="1186,141,1238,213" title="" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#invitation">
			<area shape="rect" coords="1053,253,1119,318" title="" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#echo">
			<area shape="rect" coords="1184,251,1238,326" title="" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#neurchi">
			<area shape="rect" coords="1179,362,1249,437" title="" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#locker">
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
