<!DOCTYPE html>


<html>

<head>
	<title>Royalescape - iPhone de Julie</title>
	<meta charset="UTF-8" />
  <!--<link rel="icon" href="images/favicon.ico">-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style-smartphone.css">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
</head>

<body>

<!-- Modal calendar -->
<div class="modal fade bd-example-modal-lg" data-animate-css-in='animate__zoomIn' data-animate-out='animate__flipOutY' id="calendar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="height: 90%;">
    <div class="modal-content modal-content-dark" style="height: 100%;">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calendar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body text-center" style="height: 97%;">
        <img src="images/smartphone/calendar.jpg" style="height:100%; max-width: 100%;" >
      </div>
      <div class="text-center" style="height: 5%; padding-bottom: 10px; background-color: black; border-radius: 5px;">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button data-dismiss="modal" style="
            border-radius: 2px;
            background: white;
            width: 200px;
            height: 5px;
            border-style: none;">
            </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal post-it Quart 3-->
<div class="modal fade" id="post-it" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Post-it !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <img src="images/post-it/quart3.png" alt="" style="width: 100%;">
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal photos -->
<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="photos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: auto; height: 90%;">
    <div class="modal-content modal-content-dark" style="height: 100%;">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calendar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body text-center" style="height: 97%;">
        <!-- <a href="#scrapModal" target="_self"data-toggle="modal" data-target="#post-it" data-dismiss="modal"> -->
          <img src="images/smartphone/photos.jpg" style="height:100%; max-width: 100%;"  alt="" usemap="#map1606155675407">

          <map id="map1606155675407" name="map1606155675407">
            <area shape="rect" coords="320,141,637,456" title="" alt="" data-dismiss="modal" href="#scrapModal" target="_self" data-toggle="modal" data-target="#post-it">
          </map>
        <!-- </a> -->

      </div>
      <div class="text-center" style="height: 5%; padding-bottom: 10px; background-color: black; border-radius: 5px;">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button data-dismiss="modal" style="
            border-radius: 2px;
            background: white;
            width: 200px;
            height: 5px;
            border-style: none;
            outline: none;">
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal notes -->
<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="notes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: auto; height: 90%;">
    <div class="modal-content modal-content-dark" style="height: 100%;">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calendar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body text-center" style="height: 97%;">
        <img src="images/smartphone/notes.jpg" style="height:100%; max-width: 100%;" >
      </div>
      <div class="text-center" style="height: 5%; padding-bottom: 10px; background-color: black; border-radius: 5px;">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button data-dismiss="modal" style="
            border-radius: 2px;
            background: white;
            width: 200px;
            height: 5px;
            border-style: none;
            outline: none;">
            </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal maps -->
<div class="modal fade bd-example-modal-lg" id="maps" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-header modal-content-dark">
        <h5 class="modal-title" id="exampleModalLabel">Maps (ou la carte qui a leaké un peu tôt...)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-content modal-content-dark">
      <div class="modal-body text-center" style="max-width: 100%;">
        <iframe src="https://www.google.com/maps/d/embed?mid=1ORqv0Jc6_xaY3lekDkhITmILb1iGyF56" width="640" height="480"  style="max-width: 100%;"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal phone -->
<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="phone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="height: 90%;">
    <div class="modal-content modal-content-dark" style="height: 100%;">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calendar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body text-center" style="height: 97%;">
        <img src="images/smartphone/phone.jpg" style="height:100%; max-width: 100%;" >
      </div>
      <div class="text-center" style="height: 5%; padding-bottom: 10px; background-color: black; border-radius: 5px;">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button data-dismiss="modal" style="
            border-radius: 2px;
            background: white;
            width: 200px;
            height: 5px;
            border-style: none;
            outline: none;">
            </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal meteo -->
<div class="modal fade bd-example-modal-lg" data-animate-in='animate__zoomInUp' data-animate-out='animate__flipOutY' id="meteo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: auto; height: 90%;">
    <div class="modal-content modal-content-dark" style="height: 100%;">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calendar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body text-center" style="height: 97%;">
        <img src="images/smartphone/meteo.jpg" style="height:100%; max-width: 100%;" >
      </div>
      <div class="text-center" style="height: 5%; padding-bottom: 10px; background-color: black; border-radius: 5px;">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button data-dismiss="modal" style="
            border-radius: 2px;
            background: white;
            width: 200px;
            height: 5px;
            border-style: none;
            outline: none;">
            </button>
      </div>
    </div>
  </div>
</div>


	<div class="fullHeight text-center page">
		<img class="fullHeight" src="images/iphone.png" usemap="#map1605569696870" draggable="false">

		<map id="map1605569696870" name="map1605569696870">
			<area shape="rect" coords="87,154,190,256" title="calendar" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#calendar">
			<area shape="rect" coords="235,155,335,257" title="photos" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#photos">
			<area shape="rect" coords="379,155,482,256" title="camera" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#camera">
			<area shape="rect" coords="525,154,628,255" title="notes" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#notes">
			<area shape="rect" coords="86,313,189,416" title="maps" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#maps">
			<area shape="rect" coords="232,315,334,416" title="clock" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#clock">
			<area shape="rect" coords="377,313,484,417" title="files" alt="" href="uploads/sample_file.pdf" download="IMPORTANTTRESIMPORTANT.pdf">
       <!-- <a class="btn" href="file.pdf" download="IMPORTANTTRESIMPORTANT.pdf" style="width: 100%;height: 100%;"></a> -->
			<area shape="rect" coords="72,61,104,89" title="easter1" alt="easter1" href="#scrapModal" target="_self"data-toggle="modal" data-target="#easter1">
			<area shape="rect" coords="87,1255,191,1356" title="phone" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#phone">
			<area shape="rect" coords="233,1255,337,1357" title="messages" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#messages">
			<area shape="rect" coords="379,1254,483,1357" title="meteo" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#meteo">
			<area shape="rect" coords="528,1253,628,1357" title="settings" alt="" href="#scrapModal" target="_self"data-toggle="modal" data-target="#settings">
			<area shape="rect" coords="577,65,599,87" title="easter2" alt="easter2" href="#scrapModal" target="_self"data-toggle="modal" data-target="#esater2">
		</map>
	</div>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.rwdImageMaps.js"></script>
<script type="text/javascript" src="js/jquery.rwdImageMaps.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<script type="text/javascript">
	$(document).ready(function(e) {
    	$('img[usemap]').rwdImageMaps();
	});

  $('#photos').on('shown.bs.modal', function (e) {
    	$('img[usemap]').rwdImageMaps();
	});
</script>


</body>
