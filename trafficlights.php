<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="trafficlights.css">
    <title>TRAFFIC LIGHTS</title>
</head>
<body>
    
<!-- NAVIGATION BAR -->
<div class="navigation">
	<div class="navbar">
	
		<nav>
			
		<img src="logo.png" id="logo">
			<div class="dropdown">
			<a href="#" class="dropbtn"><img src="pics/dp.png" id="dp"> </a>
				<div class="dropdown-content">
					<a href="display.php">HOME</a>
					<a href="log_out.php" action="log_out.php">LOG OUT</a>
					<a href="scoreboard(automatic).php">SCOREBOARD</a>
				</div>
			</div>

		</nav>

	</div>
	<hr>
</div>

<div class="container">

	<!-- ---------------------------- -->
	<!-- TRAFFIC LIGHTS -->
	<!-- ---------------------------- -->
	<div class="trafficlight">

		<h2>traffic lights</h2>

		<!-- RED LIGHT -->
		<div class="trafficlights-element">
				<img src="trafficlights/red.jpg" alt="Engine" data-aos="flip-right" data-aos-duration="1000">		
			
			<div class="label" data-aos="fade-left" data-aos-duration="2000">
				<label ><span>RED SIGNAL</span><br>means you must bring your vehicle to a stop at a clearly marked line. You may proceed unless you 
					are instructed to do so by an authorized Traffic Officer.
				</label><br><br>
				<label>
					<span>FLASHING RED SIGNAL</span><br>means bring your 
					vehicle to a stop and proceed only when it is safe to do so. 
				</label>
			</div>

		</div>

		<!-- YELLOW LIGHT -->
		<div class="trafficlights-element">
				<img src="trafficlights/yellow.jpg" alt="Engine" data-aos="flip-right" data-aos-duration="1000">		
			<div class="label" data-aos="fade-left" data-aos-duration="2000">
				<label><span><b>YELLOW SIGNAL</b></span><br>indicates that the red signal is about to appear. Prepare to stop.
				</label><br>
				
				<label><span><b>FLASHING YELLOW BEACON</b></span><br>
					When a flashing yellow signal is incorporated with an overhead beacon or a beacon located directly above a warning sign, it warns you to proceed with caution.
				</label><br>
			</div>
		</div>

		<!-- GREEN LIGHT -->
		<div class="trafficlights-element" >
				<img src="trafficlights/green.jpg" alt="Engine" data-aos="flip-right" data-aos-duration="1000">		
			<div class="label" data-aos="fade-left" data-aos-duration="2000">
				<label><span><b>GREEN SIGNAL</b></span><br>A green 
					signal means you can proceed, provided you yield to pedestrian and other road-users lawfully using the intersection.
				</label><br><br>

				<label><span><b>FLASHING GREEN BEACON</b></span><br>
					When a flashing left or right green arrow together 
					with a green signal is used, it permits the vehicle facing that signal to turn left, turn right or go through while opposing traffic faces a red signal.
				</label>
			</div>
		</div>

	</div>

	<!-- ---------------------------- -->
	<!-- FUNDAMENTAL / BRAKING / FOLLOWING DISTANCE-->
	<!-- ---------------------------- -->

	<div class="properbraking">
		<h2>PROPER BRAKING AND<br>FOLLOWING THE TWO OR THREE SECOND RULE</h2>
		<div class="properbraking-element">

			<img src="trafficlights/braking.jpg" alt="braking">
			<div class="scroll-box">
				<!-- <p><b>PROPER BRAKING</b></p><br> -->
				<h1>PROPER BRAKING</h1>
				<p>Do not tail gait. When there is needless traffic in your lane, staying too close to the car in front of you offers no opportunity for maneuvering.<br><br>

				When pursuing a car, keep a safe space between you and it. This will give you enough room, time to think, and, if required, space to stop safely.<br><br>
				Motorcycles should be given the same space as any other vehicle. All other vehicles on the road must share the same complete length and breadth as motorcycles.<br><br>
				</p>

				<p><b>Braking Distance</b><br><br>
				The distance travelled from the time you start to activate the brakes until you bring the vehicle to a stop. The vehicle running at 100 kph in an ideal condition can travel 60 meters when applying a full brake.</p><br>

				<p><b>Perception and Reaction Distance</b><br><br>
				Allow extra braking distance. It takes a split second for your reflexes to respond and brain to react from the time you see a potential hazard. A vehicle running at 100 kph has a perception distance of 20 meters.</p><br>

				<p><b>Total Stopping Distance</b><br><br>
				Take consideration of your perception distance, reaction distance, and braking distance based on your speed to come into a total stopping distance. A vehicle running at 100 kph has a total stopping distance of 80 meters on a full brake.</p><br>

				<p><b>Follow the two or three second rule…</b></p><br>
				<p>It is very important to avoid following another car too closely, as it gives you less time to react if the driver in front of you decides to brake or turn suddenly. For safety, drivers are advised to maintain a distance of two or three seconds of the car in front. The rule varies on the weight/mass of the vehicle given the same speed. The higher the mass, the longer the time.<br><br>

				The distance is measured in time rather than meter (or other units of measurement) as it can be difficult to judge distances while driving and what counts as a safe distance varies depending on speed.
				</p>

			</div>

		</div>
	</div>

	<!-- ---------------------------- -->
	<!-- SPEED RESTRICTION -->
	<!-- ---------------------------- -->
	<div class="speedRestriction">
		
		<h2>speed restrictions</h2>

		<table>
			<thead>
				<tr>
					<th>road type / area</th>
					<th>speed limit</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>Expressways</td>
					<td>100 km/h</td>
				</tr>
				<tr>
					<td>National Highways</td>
					<td>80 km/h</td>
				</tr>
				<tr>
					<td>Provincial Roads</td>
					<td>60 km/h</td>
				</tr>
				<tr>
					<td>City/Municipal Roads</td>
					<td>30-40 km/h</td>
				</tr>
				<tr>
					<td>Residential Areas</td>
					<td>20-30 km/</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="exception">
		<h2>EXCEPTION TO SPEED RESTRICTION</h2>
		<ol>
			<li>A physician or his driver when the former responds to emergency calls;</li>
			<li>The driver of a hospital ambulance on the way to and from the place of accident or other emergency;</li>
			<li>Any driver bringing a wounded or sick person for emergency treatment to a hospital, clinic, or any other similar place;</li>
			<li>The driver of a motor vehicle belonging to the Armed Forces while in use for official purposes in times of riot, insurrection or invasion;</li>
			<li>A police patrol vehicle in pursuit of a criminal;</li>
			<li>A law-enforcement officer who is trying to overtake a violator of traffic laws; and</li>
			<li>A fire truck in response to a fire incident.</li>
		</ol>
		
	</div>

				<!-- ---------------------------------- -->
				<!-- HOME BUTTON -->
				<!-- ---------------------------------- -->
				<div class="btn_preview">
					<a href="display.php">
						<div class="btn-next">
							<button>HOME</button>
						</div>
					</a>
				</div>

</div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>


</body>
</html>