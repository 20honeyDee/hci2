<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="nav.css">
	<link rel="stylesheet" href="page1.css">
	<title>FUNDAMENTALS OF DRIVING</title>
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

<a href="#wrapper" id="scroller">
	<div class="option-title">
	<h2 class="h2"></h2>
	</div>
</a>

<div class="container" id="wrapper">
	<div class="wrapper">
		<h1>FUNDAMENTALS OF DRIVING</h1>
		<div class="option">	
			<button id="manual" onclick="manualh2()">manual</button>
			<button id="automatic" onclick="automatich2()">automatic</button>
		</div>
			<!-- WRAPS ALL MANUAL ELEMENTS/DIV -->
			<div class="manual" data-aos="zoom-in-up">

				<div class="manual-element" data-aos="fade-up">
					<img src="fundamental/manual/accelerator.jpg" alt="Engine" data-aos="fade-up">		
					<label data-aos="fade-up"><span>accelerator pedal</span><br>The accelerator pedal controls the speed of the 
							vehicle. Pressing down on the pedal increases the speed, 
							while releasing it slows the vehicle down.
					</label>
				</div>

				<div class="manual-element" data-aos="fade-up">
					<label data-aos="fade-up"><span>Clutch Pedal</span><br>The pedal that the driver uses to 
						engage and disengage the clutch, allowing power transfer 
						between the engine and the transmission.
					</label>
					<img src="fundamental/manual/clutch.jpg" alt="Engine" data-aos="fade-up">	
				</div>

				<div class="manual-element" data-aos="fade-up">
					<img src="fundamental/manual/transmission.jpg" alt="Engine" data-aos="fade-up">		
					<label data-aos="fade-up"><span>Manual transmission</span><br>The manual transmission system, 
						consisting of gears, shafts, and a gear shift mechanism. It allows the driver to manually select 
						and change gears using the gear shift lever.
					</label>
				</div>

				<div class="manual-element" data-aos="fade-up">
					<label><span>gear shift lever</span><br>The lever used by the driver to shift between different gears in the manual transmission. It typically includes 
						positions for reverse, neutral, and multiple forward gears.
					</label>
					<img src="fundamental/manual/gear_shift.jpg" alt="Engine">	
				</div>

				<div class="manual-element">
					<img src="fundamental/manual/steering_wheel.jpg" alt="Engine">		
					<label><span>steering wheel</span><br>The steering wheel is a fundamental component for maneuvering, maintaining stability, and ensuring the driver has control over the vehicle's direction. It is a key element 
						in the overall control and operation of a motorized vehicle.
					</label>
				</div>

				<div class="manual-element">
					<label><span>flywheel</span><br>The flywheel is mounted on the engine's crankshaft and provides inertia 
						for the engine and a smooth connection to the clutch.
					</label>
					<img src="fundamental/manual/flywheel.jpg" alt="Engine">	
				</div>

				<div class="manual-element">
					<img src="fundamental/manual/driveshaft.jpg" alt="Engine">		
					<label><span>driveshaft</span><br>The driveshaft transmits power from the transmission 
						to the differential, which further distributes power to the wheels.
					</label>
				</div>

				<div class="manual-element">
					<label><span>clutch master</span><br>In hydraulic clutch systems, these components assist in transmitting 
						the driver's input to engage and disengage the clutch.
					</label>
					<img src="fundamental/manual/clutch_master.jpg" alt="Engine">	
				</div>

				<div class="manual-element">
					<img src="fundamental/manual/clutch_slave.jpg" alt="Engine">		
					<label><span>clutch slave</span><br>A clutch slave cylinder is a hydraulic device that works in conjunction with the clutch master cylinder to facilitate the operation of the clutch in a manual transmission vehicle. 
						It is part of the hydraulic linkage that enables the driver to control the engagement and disengagement of the clutch, allowing for smooth gear changes.
					</label>
				</div>

				<div class="manual-element">
					<label><span>clutch plate</span><br>The clutch plate, or clutch disc, is a friction-based component situated between the engine's flywheel and the pressure plate within the clutch assembly. It is a rotating disc that connects and disconnects the engine from the transmission by engaging with the flywheel when the clutch is 
						engaged and disengaging when the clutch is released.
					</label>
					<img src="fundamental/manual/clutchplate.jpg" alt="Engine">	
				</div>

				<div class="manual-element">
					<img src="fundamental/manual/tire.jpg" alt="Engine">		
					<label><span>tire</span><br>A car tire is a robust, rubber-made, and typically inflatable component that is mounted on a vehicle's wheel rim. It serves as the point of contact between the vehicle and the road, providing crucial functions such as supporting the vehicle's weight, transmitting driving and braking forces, 
						and contributing to overall vehicle stability and safety.
					</label>
				</div>

				<div class="manual-element">
					<label><span>accelerator pedal</span><br>The pedal that the driver uses to engage and 
						disengage the clutch, allowing power transfer 
						between the engine and the transmission.
					</label>
					<img src="fundamental/manual/clutch.jpg" alt="Engine">	
				</div>

				<div class="manual-element">
					<img src="fundamental/manual/tire.jpg" alt="Engine">		
					<label><span>tire</span><br>A car tire is a robust, rubber-made, and typically inflatable component that is mounted on a vehicle's wheel rim. It serves as the point of contact between the vehicle and the road, providing crucial functions such as supporting the vehicle's weight, transmitting driving and braking forces, 
						and contributing to overall vehicle stability and safety.
					</label>
				</div>

				<div class="manual-element">
					<label><span>suspension</span><br>Components that support the vehicle's 
						weight, absorb shocks, and provide a comfortable ride.
					</label>
					<img src="fundamental/manual/suspension.jpg" alt="Engine">	
				</div>

				<div class="manual-element">
					<img src="fundamental/manual/bellhousing.jpg" alt="Engine">		
					<label><span>bellhousing</span><br>bellhousing is a component in an automotive transmission system that houses the clutch or torque converter and provides 
						the connection between the engine and the transmission
					</label>
				</div>

				<div class="manual-element">
					<label><span>Brake</span><br>Brakes are components in a vehicle designed to slow down or stop the vehicle's motion. They work by applying friction to the wheels, converting kinetic energy into heat, 
						and gradually bringing the vehicle to a controlled stop.
					</label>
					<img src="fundamental/manual/brake.jpg" alt="Engine">	
				</div>

				<div class="manual-element">
					<img src="fundamental/manual/pressureplate.jpg" alt="Engine">		
					<label><span>pressure plate</span><br>A pressure plate is a crucial component in a manual transmission's clutch system. It applies pressure to the clutch disc, allowing it to engage with the flywheel 
						and transmit power from the engine to the transmission.
					</label>
				</div>

				<div class="manual-element">
					<label><span>shift linkage</span><br>Shift linkage refers to the mechanical components that connect the gear shifter in the vehicle's interior to the transmission. It enables the driver to select and engage different gears by transmitting 
						the movement from the gear shifter to the transmission.
					</label>
					<img src="fundamental/manual/Shiftlinkage.jpg" alt="Engine">	
				</div>

				<div class="manual-element">
					<img src="fundamental/manual/throwout_bearing.jpg" alt="Engine">		
					<label><span>throw out bearing</span><br>A throw-out bearing, also known as a release bearing, is part of the clutch assembly in a manual transmission. It engages and disengages the pressure plate from the clutch disc when the clutch pedal 
						is depressed or released, allowing for smooth gear changes.
					</label>
				</div>
			<!-- ---------------------------------- -->
				<!-- NEXT BUTTON -->
			<!-- ---------------------------------- -->
				<div class="btn-preview">
					<a href="blowbaga.php">
						<div class="btn-next">
							<button>NEXT-></button>
						</div>
					</a>
						<div class="preview">
							<h3>Next is BLOWBAGA</h3>
						</div>
				</div>

			</div>

			<!-- --------------- -->
			<!-- WRAPS ALL AUTOMATIC ELEMENTS/DIV -->
			<!-- --------------- -->

			<div class="automatic">

				<div class="automatic-element">
					<label><span>axle</span><br>Axles transmit power from the differential to the wheels, propelling the vehicle forward. They are integral in converting rotational 
						power from the transmission into linear motion.
					</label>
					<img src="fundamental/automatic/axle.jpg" alt="Axles">	
				</div>

				<div class="automatic-element">
					<img src="fundamental/automatic/Clutches_bands.jpg" alt="Engine">		
					<label><span>Clutches and Bands</span><br>Clutches and bands are friction-based components that play a key role in locking and releasing specific gears within the transmission. They 
						enable the transmission to smoothly shift between different gear ratios.
					</label>
				</div>

				<div class="automatic-element">
					<label><span>Differential</span><br>The differential is a component that distributes power from the transmission to the wheels. It allows the wheels to rotate at 
						different speeds during turns, ensuring stability and smooth handling.
					</label>
					<img src="fundamental/automatic/differential.jpg" alt="Engine">	
				</div>

				<div class="automatic-element">
					<img src="fundamental/automatic/FuelPump.jpg" alt="Engine">		
					<label><span>Oil Pump</span><br>The oil pump is responsible for circulating transmission fluid throughout the system, maintaining the necessary pressure for proper lubrication and cooling. It ensures a consistent 
						flow of fluid to prevent issues related to friction and overheating.
					</label>
				</div>

				<div class="automatic-element">
					<label><span>Hydraulic System</span><br>The hydraulic system plays a pivotal role in the transmission by controlling the engagement and disengagement of gears. It utilizes hydraulic pressure to facilitate 
						smooth gear changes, contributing to overall transmission performance.</label>
					<img src="fundamental/automatic/hydraulic.jpg" alt="Engine">	
				</div>

				<div class="automatic-element">
					<img src="fundamental/automatic/oilcooler.jpg" alt="Engine">		
					<label><span>Oil Cooler</span><br>The oil cooler is designed to dissipate heat from the transmission fluid, preventing overheating. It helps maintain the optimal temperature of the fluid, 
						ensuring consistent performance and longevity of the transmission.
					</label>
				</div>

				<div class="automatic-element">
					<label><span>Park Pawl</span><br>The park pawl is a mechanical component that engages a gear to prevent movement when the vehicle is parked. 
						It provides a secure and stationary position for the transmission.
					</label>
					<img src="fundamental/automatic/ParkPawl.jpg" alt="Engine">	
				</div>

				<div class="automatic-element">
					<img src="fundamental/automatic/planetary.jpg" alt="Engine">		
					<label><span>Planetary Gearset</span><br>Comprising sun gears, planet gears, and a ring gear, the planetary gearset provides different gear ratios. This system allows for seamless transitions 
						between gears, ensuring a smooth and efficient driving experience.
					</label>
				</div>

				<div class="automatic-element">
					<label><span>Shift Solenoids</span><br>Shift solenoids are electromechanical devices that control the flow of transmission fluid. They play a crucial role in directing fluid to specific clutches 
						and bands, enabling the engagement of desired gears during shifting.
					</label>
					<img src="fundamental/automatic/shiftSolenoid.jpg" alt="Engine">	
				</div>

				<div class="automatic-element">
					<img src="fundamental/automatic/tcm.jpg" alt="Engine">		
					<label><span>Transmission Control Module (TCM)</span><br>The TCM is an electronic control unit that manages and coordinates the operation of the automatic transmission. It processes input from 
						various sensors to make real-time adjustments for optimal performance.
					</label>
				</div>

				<div class="automatic-element">
					<label><span>Throttle Cable or Electronic Throttle Control</span><br>The throttle cable or electronic throttle control connects the accelerator pedal to the transmission. It influences transmission behavior by 
						adjusting the engine's power output based on accelerator pedal input.
					</label>
					<img src="fundamental/automatic/ThrottleCables.jpg" alt="Engine">	
				</div>

				<div class="automatic-element">
					<img src="fundamental/automatic/torqueConverter.jpg" alt="Engine">		
					<label><span>Torque Converter</span><br>The torque converter is a fluid coupling device that transfers power from the engine to the transmission. It allows the engine to rotate 
						independently of the transmission, providing a smooth transition of power.
					</label>
				</div>

				<div class="automatic-element">
					<label><span>Transmission Fluid</span><br>Transmission fluid is a specialized lubricant that serves multiple purposes. It reduces friction between moving parts, dissipates heat generated during operation, 
						and ensures the smooth functioning of gears within the transmission.
					</label>
					<img src="fundamental/automatic/transmissionFluid.jpg" alt="Engine">	
				</div>

				<div class="automatic-element">
					<img src="fundamental/automatic/valve.jpg" alt="Engine">		
					<label><span>Valve Body</span><br>The valve body is a critical component that controls the flow of transmission fluid and the engagement of specific gears. It contains valves that direct 
						fluid to the appropriate locations, facilitating precise gear changes.
					</label>
				</div>

						<!-- ---------------------------------- -->
						<!-- NEXT BUTTON -->
						<!-- ---------------------------------- -->
						<div class="btn-preview2">
							<a href="blowbaga.php">
								<div class="btn-next2">
									<button>NEXT-></button>
								</div>
							</a>
								<div class="preview2">
									<h3>Next is BLOWBAGA</h3>
								</div>
						</div>

			</div>
	</div>
	
</div>



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<script src="fundamental.js"></script>

  

</body>


</html>