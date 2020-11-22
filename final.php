<!DOCTYPE html>
<html>

<head>
 	<title>Escape</title>
 	<meta charset="UTF-8" />
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="css/style-armoire.css">
</head>

<body>

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
      	<div class="modal-body auth">
      		<div>🎬</div>

      	</div>
        <div class="modal-body auth">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Ce casier est protégé par un code à quatre chiffres</label>
              <input 
                        type="text"
                        pattern="[0-9][0-9][0-9][0-9]"
                        inputmode="numeric"
                        class="form-control"
                        id="recipient-name"
                        name="organisation-name"
                        aria-invalid="false"
                        autocomplete="off"
                        placeholder="0000"
                        maxlength="10"
                        required>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" href="#scrapModal" target="_self"data-toggle="modal" data-target="#locker-content">Unlock</button>
      </div>
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
<script type="text/javascript">
	$(document).ready(function(e) {
    	$('img[usemap]').rwdImageMaps();
	});
</script>
</body>
