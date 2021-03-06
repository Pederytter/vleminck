
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width">
	</head>
	<body>
		<header>
			<nav class="topnav" id="myTopnav">
				<ul>
					<a href="#homepage"><img id="logo" src="images/logo1.png" alt="Vleminck Logo"></a>
					<li><a class="page-scroll" href="#homepage">Homepage</a></li>
					<li><a class="page-scroll" href="#menu">Menu</a></li>
					<li><a class="page-scroll" href="#about">About Us</a></li>
					<li><a class="page-scroll" href="#location">Location</a></li>
				</ul>
			</nav>
			<section id="homepage" class="area col-md-12">
				<h1>VleminckX</h1>
				<h3>SausMeesters</h3>
			</section>
		</header>
		<main>
			<section id="hours" class="col-md-12 col-xs-12 col-sm-12">
				<div class="container">
					<section id="hoursleft" class="col-md-6">
						<h3>Open Hours</h3>
						<p>Monday-Friday  -  11:00 - 19:00 <br>
							Saturday-Sunday  -  11:00 - 20:00</p>
					</section>
					<section id="hoursright" class="col-md-6">
					</section>
				</div>
			</section>
			<section class="menu">

				<h1>Menu</h1>

				<section class="menuleft col-md-4" >
					<h3>Regular Sauces</h3>
					<ol>
						<li>Fries Sauce</li>
						<li>Mayonnaise "The Classic"</li>
						<li>Tomato Ketchup</li>
						<li>Curry Ketchup</li>
						<li>Satay Sauce</li>
						<li>Sambal Sauce</li>
						<li>Joppie Sauce</li>
						<li>Piccalilly</li>
						<li>Apple Sauce</li>
						<li>Special mix Tomato Ketchup **<br>
							<i>with mayonnaise + onions</i>
						<li>Special mix Curry ketchup **<br>
							<i>with mayonnaise + onions</i></li>
						<li>Oorlog Mix **<br>
							<i>with mayonnaise
								+ satay sauce + onions</i>
							<br>
							<b>**DOUBLE PORTION OF SAUCE</b></li>
					</ol>

					<h4>Regular Sauces</h4>
					<p id="sauces">Per sauce per portion: <br> <b>&euro; 0.70</b></p>

					<p id="sauces">Double portion or 2 sauces: <br> <b>&euro; 1.00</b></p>

				</section>
				<section class="menumid col-md-4">
					<br><br>
					<img src="images/smallmenu.png"/>
					<br>
					<img src="images/mediummenu.png"/>
					<br>
					<img src="images/largemenu.png"/>
				</section>

				<section class="menuright col-md-4">
					<h3>Belgian Sauces</h3>
					<ol>
						<li>Belgian Mayonnaise</li>
						<li>Lemon Mayonnaise</li>
						<li>Samurai Sauce</li>
						<li>American Sauce</li>
						<li>Tartar Sauce</li>
						<li>Andalouse Sauce</li>
						<li>Hannibal Sauce</li>
						<li>Hawaii Sauce</li>
						<li>Cocktail Sauce</li>
						<li>Pickles Sauce</li>
						<li>Green Pepper Sauce</li>
						<li>Garlic Sauce</li>
						<li>Mustard Sauce</li>
						<li>Spicy Ketchup Sauce</li>
						<li>Barbecue Sauce</li>
						<li>Yellow Curry Sauce</li>
					</ol>

					<h4>Belgian Sauces</h4>
					<p id="sauces">Per sauce per portion: <br> <b>&euro; 0.70</b></p>

					<p id="sauces">Double portion or 2 sauces: <br> <b>&euro; 1.00</b></p>

				</section>
			</section>

			<div class="aboutbg col-md-12">
				<section class="about col-md-4">
					<h2>About</h2>        
					<p>Vleminckx the Sausmeester (sauce master) has been located in the centre of Amsterdam, a few footsteps from the Spui, since 1957. Here, in a tiny hole-in-the-wall shop, you can find the best Flemish fries in Amsterdam.<br>For over 57 years the Sausmeester has stood for quality, selling home-made fries, which nowadays makes it unique. Vlaams Friteshuis Vleminckx is known for the many different sauces that can be chosen to accompany your paper cone filled with Belgian fries.<br>Many locals and tourists visit this spot regulary.</p>
				</section>
			</div>

			<section>
				<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAvwhE6BPNjzub8YAdB0DeR422Yvfe3g5U&v=3.exp'></script><div style='overflow:hidden;height:440px;width:100%;'><div id='gmap_canvas' style='height:440px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="https://privacypolicytemplate.net">privacy policy example</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(52.3678992,4.8910061999999925),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(52.3678992,4.8910061999999925)});infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>Voetboogstraat 33, 1012 XK Amsterdam, Holland<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
			</section>
			<footer>
				<div class="col-md-12 container">
					<section class="col-md-4 col-sm-6 col-xs-12">
						<h4>Contact Info</h4>
						<p>Number: 547 244 745<br> Address: Voetboogstraat 33</p>
					</section>
					<section class="col-md-4 col-sm-6 col-xs-12">

					</section>
					<section class="col-md-4 col-sm-6 col-xs-12">
						<h4>Find us here</h4>
						<p>Facebook</p>
					</section>
				</div>
			</footer>
			</body>
		</html>