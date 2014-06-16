<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>
			Voyagers Now
		</title>
		<script type="text/javascript" src="scripts/jquery-1.5.js"></script>
		<script type="text/javascript" src="scripts/distance.js"></script>
		<script type="text/javascript">$(window).load(function () {setInterval('dist_controller()',100); updatePlanets(); setVisible();});</script>
		<script type="text/javascript" src="scripts/map.js"></script>

		<link rel="stylesheet" type="text/css" href="map.css">
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<script type="text/javascript">
			var unit = 'km';
		</script>
	</head>
	<body>
		<div id="settings">
			<p>Pick Unit:
				<select onchange="updateUnit()" id="selectUnit">
					<option value="km">Kilometers</option>
					<option value="mi">Miles</option>
					<option value="au">Astronomical Units</option>
				</select>
			</p>
		</div>
		<div id="header">
			<h1>Voyagers Now</h1>
			<p>How far are the Voyager spacecrafts from the Sun and the Earth right now?</p>
		</div>
		<div id="sun">
			<p class="label">Sun</p>
		</div>
		<div id="space">
			<div class="planet" id="mercury">
				<div class="line"></div>
				<p class="label">Mercury</p>
				<div class="render"></div>
			</div>
			<div class="planet" id="venus">
				<div class="line"></div>
				<p class="label">Venus</p>
				<div class="render"></div>
			</div>
			<div class="planet" id="earth">
				<div class="line"></div>
				<p class="label">Earth</p>
				<div class="render"></div>
			</div>
			<div class="planet" id="mars">
				<div class="line"></div>
				<p class="label">Mars</p>
				<div class="render"></div>
			</div>
			<div class="planet" id="jupiter">
				<div class="line"></div>
				<p class="label">Jupiter</p>
				<div class="render"></div>
			</div>
			<div class="planet" id="saturn">
				<div class="line"></div>
				<p class="label">Saturn</p>
				<div class="render"></div>
			</div>
			<div class="planet" id="uranus">
				<div class="line"></div>
				<p class="label">Uranus</p>
				<div class="render"></div>
			</div>
			<div class="planet" id="neptune">
				<div class="line"></div>
				<p class="label">Neptune</p>
				<div class="render"></div>
			</div>

			<div class="probe" id="voyager1">
				<div class="line"></div>
				<p class="label">Voyager 1</p>
				<div class="render"></div>
			</div>
			<div class="probe" id="voyager2">
				<div class="line"></div>
				<p class="label">Voyager 2</p>
				<div class="render"></div>
			</div>
		</div>
		<div id="distances">
			<div>
				<p class="probe-name">Voyager 1</p>
				<p>Distance from Sun: <span id="voy1_ds">0</span></p>
				<p>Distance from Earth: <span id="voy1_de">0</span></p>
			</div>
			<div>
				<p class="probe-name">Voyager 2</p>
				<p>Distance from Sun: <span id="voy2_ds">0</span></p>
				<p>Distance from Earth: <span id="voy2_de">0</span></p>
			</div>
		</div>
		<div id="footer">
			<p>Diagram created by <a href="http://brunophilipe.com">Bruno Philipe</a>.</p>
			<p>Bodies and Probes sizes and positions are not to scale, but relative linear distances are (Perihelions used).</p>
			<p>Data retreived from <a href="http://voyager.jpl.nasa.gov/where/" target="_blank">NASA JPL website</a> and used with <a href="usage_permission.pdf">permission</a>.</p>
		</div>
	</body>
</html>
