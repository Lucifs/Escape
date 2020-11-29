<!DOCTYPE html>
<html>

<head>
	<title>Royalescape - Salle du coffre</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="css/style-final3.css">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
</head>

<body>

<!-- Modal maps -->
<div class="modal fade bd-example-modal-lg" id="maps" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-header modal-content-dark">
        <h5 class="modal-title" id="exampleModalLabel">Félicitations !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-content modal-content-dark">
      <div class="modal-body text-center" style="max-width: 100%;">
      	<div>Agents de la divison 013, vous êtes venu à bout de cette organisation criminelle.</div>
      	<div> Envoie sur discord le mot suivant : "
      		<script type="text/javascript">
				var ladate = new Date();
				var h=ladate.getHours();
				if ((h>=13)&&(h<16)) {
					document.write('Quinte');
				}
				else {
					if ((h>=16)&&(h<18)) {
					document.write('Flush');
					}
					else {
						document.write('Dame');
					}
				}
			</script>
			" et ta mission sera achevée.</div>
		<div>
			Prochaine mission ce soir à 20h.
		</div>
        <iframe src="https://www.google.com/maps/embed?pb=!4v1606577154990!6m8!1m7!1sy2v5fHkLI_LVsjJq4dTcxA!2m2!1d43.3442865222153!2d5.442309086505996!3f15.05581607726944!4f8.788031934514805!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0; margin-top: 30px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="modal-footer">
		
		  <p style="background-color:red">Un grand remerciement aux développeurs :<b> Glenn Louedec</b> et <b>Arthur Louradou</b> </p>
		  <p style="background-color:red">On remercie aussi les graphistes : <b>Agathe Rabachou</b> et <b>Grégoire Dusseux</b> </p>
		  <p style="background-color:red">Et aussi ceux qui ont organisé toute l'histoire : <b>Agathe</b> et <b>Grégoire</b> </p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



	<div class="fullHeight text-center page">
		<img class="fullHeight" src="images/ordi-final2.png" usemap="#map1606435175118">
    
    <map id="map1606435175118" name="map1606435175118">
      <area shape="rect" coords="334,285,634,375" title="maps" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#maps">
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
