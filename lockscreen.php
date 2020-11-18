<!DOCTYPE html>
<html>

<head>
	<title>Escape</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style-smartphone.css">
</head>

<body>
	<!-- Modal auth  Rappel contact mission-->
	<div class="modal fade" id="auth" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content" style="
	    color: white;
		background: black;">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Autre mode d'authentification</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body auth">
	        <form method="post" action="" name="signin-form">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Entrez votre date de naissance :</label>
	            <input 
                        type="text"
                        pattern="^([0][1-9]|[1-2][0-9]|30|31)\/([0][1-9]|10|11|12)\/(19[0-9][0-9]|20[0-1][0-9]|2020)"
                        inputmode="numeric"
                        class="form-control"
                        id="field-birthday recipient-name"
                        name="login"
                        aria-invalid="false"
                        autocomplete="off"
                        placeholder="18/10/2000"
                        maxlength="10"
                        required>
	          </div>
	       </form>
	       
	      </div>
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button type="submit" name="login" value="login" class="btn btn-success">Confirm</button>
        	<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$date = $_POST['login'];
				  if ($date == '23/11/1998') {
				    echo "	<div class="alert alert-warning">
				  				<strong>Erreur : mauvaise date !</strong>
							</div>
						";
				  } else {
				    echo $date;
				  }

				}
			?>
	      </div>
	    </div>
	  </div>
	</div>
	
	<!-- Implémenter le modal qui shake !! https://www.creative-tim.com/product/login-and-register-modal -->











	<div class="fullHeight text-center page">
		<img class="fullHeight" src="images/iphone-lockscreen.png" usemap="#map1605720181048">
		<!-- Map creee avec https://www.html-map.com/ -->
		<map id="map1605720181048" name="map1605720181048">
			<area shape="rect" coords="195,1312,531,1337" title="" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#auth">
			<area shape="rect" coords="55,70,134,96" title="" alt="" href="links/operateur.html" target="_self">
		</map>
		
	</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.rwdImageMaps.js"></script>
<script type="text/javascript" src="js/jquery.rwdImageMaps.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
    	$('img[usemap]').rwdImageMaps();
	});
</script>
</body>
