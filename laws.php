
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="law.css">
<title>LAWS AND FINES</title>

</head>
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


<!-- LAW VIOLATIONS -->
<div class="title" id="images">
  <h2>LAW VIOLATIONS</h2>
</div>

<div class="container">
  <div class="box" onclick="toggleDescription(this)">
    <h4>REPUBLIC ACT NO. 4136 - "LAND TRANSPORTATION AND TRAFFIC CODE"</h4>

    <div class="description">
      <p>This law, also known as the Land Transportation and Traffic Code, regulates various aspects of land transportation in the Philippines. It covers provisions related to driver's licenses, registration and operation of motor vehicles, traffic rules and regulations, vehicle inspections, and penalties for violations. It aims to ensure road safety, efficient traffic management, and orderly transportation systems.</p>
    </div>
  </div>
</div>

<!-- SECOND -->
<div class="container">
  <div class="box" onclick="toggleDescription(this)">
    <h4>REPUBLIC ACT NO. 8749 - "PHILIPPINE CLEAN AIR ACT OF 1999"</h4>

    <div class="description">
      <p>The Philippine Clean Air Act of 1999 is an environmental law that aims to protect and improve the quality of the country's air. It sets standards and regulations for controlling air pollution from stationary and mobile sources, including motor vehicles. The law mandates emission standards for vehicles, promotes the use of clean fuels and technologies, and establishes mechanisms for monitoring and enforcing air quality standards.</p>
    </div>
  </div>
</div>

<!-- THIRD -->
<div class="container">
  <div class="box" onclick="toggleDescription(this)">
    <h4>REPUBLIC ACT NO. 8750 - "SEAT BELTS USE ACT OF 1999"</h4>

    <div class="description">
      <p>The Seat Belts Use Act of 1999 requires the mandatory use of seat belts by all occupants of motor vehicles in the Philippines. The law mandates the installation and proper use of seat belts for drivers and passengers to enhance road safety and minimize the risk of injuries in the event of accidents.</p>
    </div>
  </div>
</div>

<!-- FOURTH -->
<div class="container">
  <div class="box" onclick="toggleDescription(this)">
    <h4>REPUBLIC ACT NO. 8794 - "MOTOR VEHICLE USER'S CHARGE LAW"</h4>

    <div class="description">
      <p>The Motor Vehicle User's Charge Law imposes fees on motor vehicle users to generate funds for road maintenance, improvement, and transportation-related programs. The collected charges are used for the development, repair, and maintenance of highways, bridges, and other infrastructure projects aimed at enhancing the country's transportation system.</p>
    </div>
  </div>
</div>

<!-- FIFTH -->
<div class="container">
  <div class="box" onclick="toggleDescription(this)">
    <h4>REPUBLIC ACT NO. 10054 - "MOTORCYCLE HELMET ACT OF 2009"</h4>

    <div class="description">
      <p>The Motorcycle Helmet Act of 2009 mandates the use of standard protective helmets by motorcycle riders and passengers in the Philippines. It requires all motorcycle riders to wear helmets that comply with approved safety standards to reduce the risk of head injuries and promote road safety.</p>
    </div>
  </div>
</div>

<!-- SIXTH -->
<div class="container">
  <div class="box" onclick="toggleDescription(this)">
    <h4>REPUBLIC ACT NO. 10586 - "ANTI-DRUNK AND DRUGGED DRIVING ACT OF 2013"</h4>

    <div class="description">
      <p>The Anti-Drunk and Drugged Driving Act of 2013 addresses the issue of driving under the influence of alcohol or dangerous drugs. The law imposes penalties on drivers found to be operating a vehicle while intoxicated or impaired, with the aim of reducing accidents and promoting road safety.</p>
    </div>
  </div>
</div>

<!-- SEVENTH -->
<div class="container">
  <div class="box" onclick="toggleDescription(this)">
    <h4>REPUBLIC ACT NO. 10666 - "CHILDREN'S SAFETY ON MOTORCYCLES ACT OF 2015"</h4>

    <div class="description">
      <p>The Children's Safety on Motorcycles Act of 2015 prohibits the transport of children below a certain age as passengers on motorcycles, except in certain circumstances. The law aims to ensure the safety and welfare of children and prevent accidents or injuries resulting from unsafe motorcycle practices.</p>
    </div>
  </div>
</div>

<!-- EIGTH -->
<div class="container">
  <div class="box" onclick="toggleDescription(this)">
    <h4>REPUBLIC ACT NO. 10913 - "ANTI-DISTRACTED DRIVING ACT"</h4>

    <div class="description">
      <p>The Anti-Distracted Driving Act regulates and penalizes the use of mobile phones and electronic devices while operating a motor vehicle. It prohibits drivers from using mobile devices, except for hands-free functions, to minimize distractions and promote safer driving.</p>
    </div>
  </div>
</div>

<!-- NINTH -->
<div class="container">
  <div class="box" onclick="toggleDescription(this)">
    <h4>REPUBLIC ACT NO. 10916 - "ROAD SPEED LIMITER ACT OF 2016"</h4>

    <div class="description">
      <p>The Road Speed Limiter Act of 2016 requires the installation of speed limiters in public utility vehicles (PUVs) to regulate and control their maximum speeds. The law aims to enhance road safety by preventing overspeeding and reducing the likelihood of accidents caused by excessive speeds.</p>
    </div>
  </div>
</div>

<!-- TENTH -->
<div class="container">
  <div class="box" onclick="toggleDescription(this)">
    <h4>REPUBLIC ACT NO. 10930 - "ISSUANCE OF DRIVER'S LICENSE"</h4>

    <div class="description">
      <p>The Issuance of Driver's License Act streamlines and simplifies the process of obtaining a driver's license in the Philippines. It allows the validity period of professional and non-professional driver's licenses to be extended up to ten years, subject to certain conditions, in order to reduce administrative burdens and enhance the efficiency of license issuance.</p>
    </div>
  </div>
</div>



<div class="btn_preview">
  <a href="display.php">
    <div class="btn-next">
      <button>HOME</button>
    </div>
  </a>
</div>


<script>
  
  function toggleDescription(element) {
  element.classList.toggle("active");
}

</script>

