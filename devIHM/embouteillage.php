<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <!-- TODO: Uncomment following line and make sure boottheme.css points to BootTheme generated file -->
    <!-- link href="boottheme.css" rel="stylesheet" type="text/css" /-->    
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>OptimodLyon - Livreur Mode</title>
	
	<!--<link rel="icon" href="img/fav_icon.png" type="image/png"/>
	<link rel="shortcut icon" href="img/fav_icon.png" type="image/png" />-->
	
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
	
	<!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />-->
	<link href="css/master.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
	<link rel="stylesheet" href="leaflet-routing-machine.css" />
	<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet/less" type="text/css" href="css/variables.less">
	<script type="text/javascript" src="js/jquery-1.8.3.js"></script>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
	<script type="text/javascript" src="js/countdown.js"></script>
	<script type="text/javascript">

 $(document).ready(function(){	
	
	$(".container-fluid").css('display','none');
	setTimeout(function(){  
	$(".container-fluid").slideDown('normal'); 

	},750); 
});

</script>
</head>

<body >

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" style="width:65%" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">OL</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Bienvenue <a href="#" class="navbar-link">Okba BRAD</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="index.php">Livraison</a></li>
              <li><a href="plan.php">Plan</a></li>
              <li><a href="assistance.php">Assistance</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid" >
      <div class="row-fluid" style="padding-right:-50px">
       
	   
        <div class="span10" style="background:#FFF;">
          <div class="hero-unit" style="">
           
			 <div id="map" style="height:160px;"></div>
            <!--<p><a style="float:right;" class="btn btn-primary btn-large">Lire la suite &raquo;</a></p>-->
          </div>
		  

		
		<div class="span3" style="float:right;">
          <div class="sidebar-nav" >
			<div style="text-align:center">
			 <p style="font-size:18px"><b>Bloqué ici : </b><br/>10 rue de la Physique - 69100 Villeurbanne</p>
			  <p style="font-size:18px; margin-top:0px;"><b>Temps écoulé dans l'embouteillage : </b><br/><span id="compteurMin">0</span> min <span id="compteurSec">0</span> sec</p>
			</div>
            <ul class="nav nav-list">
              <li style="margin-top:15px;"><p><a href="index.php" style="float:right;width:80%" class="btn btn-primary btn-large">Embouteillage terminé</a></p></li>
              <li style="margin-top:15px;"><p><a href="assistance.php" style="float:right;width:80%" class="btn btn-primary btn-large">Assistance</a></p></li>

              
            </ul>

          </div><!--/.well -->
        </div><!--/span-->
      </div><!--/row-->


      

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap.min.js"></script>  
	<script type="text/javascript" src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>	
	<script type="text/javascript" src="routine_machine/leaflet-routing-machine.js"></script>	
	<script type="text/javascript" >
	var map = L.map('map').setView([45.781645, 4.872941], 13);

		L.tileLayer('https://{s}.tiles.mapbox.com/v3/{id}/{z}/{x}/{y}.png', {
			maxZoom: 18,
			/*attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
				'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="http://mapbox.com">Mapbox</a>',*/
			id: 'examples.map-i875mjb7'
		}).addTo(map);


		L.marker([45.781645, 4.872941]).addTo(map)
			//.bindPopup("<b>Vous êtes ici</b><br />Okba SAPIN.").openPopup();

		/*L.circle([51.508, -0.11], 500, {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5
		}).addTo(map).bindPopup("I am a circle.");

		L.polygon([
			[51.509, -0.08],
			[51.503, -0.06],
			[51.51, -0.047]
		]).addTo(map).bindPopup("I am a polygon.");*/

		/*L.polygon([
			[45.781645, 4.872941],
			[45.7844, 4.88565],
			[45.78491, 4.88913],
			[45.78285, 4.89055],
			[45.78093, 4.88437],
			[45.77679, 4.87636],
			[45.77486, 4.87671],
			[45.77522, 4.88029],
			
			[45.78145, 4.87316]
		]).addTo(map).bindPopup("Itinéraire");*/
		
		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);

		/*L.Routing.control({
			waypoints: [
				L.latLng(57.74, 11.94),
				L.latLng(57.6792, 11.949)
			]
		}).addTo(map);*/
		
		var popup = L.popup();

		function onMapClick(e) {
			popup
				.setLatLng(e.latlng)
				.setContent("Aller à <b>" + e.latlng.toString() + " ?")
				.openOn(map);
		}

		map.on('click', onMapClick);

	</script>
  </body>

</html>