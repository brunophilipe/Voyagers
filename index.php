<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>
			Voyagers Now
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="author" content="Bruno Philipe">
		<meta name="description" content="Real-time diagram displaying the linear distances from the Voyager probes to the Sun and to the Earth.">

		<script type="text/javascript" src="scripts/jquery-1.5.js"></script>
		<script type="text/javascript" src="scripts/distance.js"></script>
		<script type="text/javascript">$(window).load(function () {setInterval('dist_controller()',100); updatePlanets(); setVisible();});</script>
		<script type="text/javascript" src="scripts/map.js"></script>

		<link rel="stylesheet" type="text/css" href="map.css">
		<link href='https://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
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
			<iframe src="https://ghbtns.com/github-btn.html?user=brunophilipe&amp;repo=Voyagers&amp;type=watch&amp;count=true" width="90" height="20"></iframe>
			<div class="fb-like" data-href="https://www.brunophilipe.com/experiments/voyagers/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" style="position: relative; left: -4px; top: -4px;"></div>
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
				<p class="probe-name"><span>Click to learn more about this probe:</span> <a href="https://en.wikipedia.org/wiki/Voyager_1" target="_blank">Voyager 1</a></p>
				<p>Distance from Sun: <span id="voy1_ds">0</span></p>
				<p>Distance from Earth: <span id="voy1_de">0</span></p>
			</div>
			<div>
				<p class="probe-name"><span>Click to learn more about this probe:</span> <a href="https://en.wikipedia.org/wiki/Voyager_2" target="_blank">Voyager 2</a></p>
				<p>Distance from Sun: <span id="voy2_ds">0</span></p>
				<p>Distance from Earth: <span id="voy2_de">0</span></p>
			</div>
		</div>
		<div id="footer">
			<p>Diagram created by <a href="https://brunophilipe.com">Bruno Philipe</a>.</p>
			<p>Bodies and Probes sizes and positions are not to scale, but relative linear distances are (Perihelions used).</p>
			<p>Data retreived from <a href="https://voyager.jpl.nasa.gov/where/" target="_blank">NASA JPL website</a> and used with <a href="usage_permission.pdf">permission</a>.</p>
		</div>
	</body>
</html>
