<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="nav.css">
	<title>land</title>
</head>
<body>

	<!-- NAVIGATION BAR -->

	<div class="navigation">
		<div class="navbar">
		
			<nav>
				
			<img src="logo.png" id="logo">
				
				<ul>
					<li><a href="land1.php">HOME</a></li>
					<li><a href="abtUs.php">ABOUT US</a></li>
					<!-- <li><a href="land1.php">CONTACT US</a></li> -->
					<li><a href="sign_up.php">SIGN-UP</a></li>
					<li><a href="log_in.php" id="login">LOG-IN</a></li>
					<li><a href="admin.php" id="admin">ADMIN</a></li>							
				</ul>
			</nav>
		</div>
		<hr>
	</div>

<!-- HOME -->
<!-- <div class="home"> -->
	<div class="landing">
	
		<h1 data-aos="fade-right">MAESTRO</h1>
		<h2 data-aos="zoom-in-up">Mastering road's <span>basics</span></h2>
		<img src="pics/bg4.png" alt="car" id="car" data-aos="fade-left">
	
	</div>

	<!-- CONTACT US ICONS -->
	<div class="contact">
		<h6>Contact us</h6>

		<div class="icons">
			<a href="abtUs.php"><img src="pics/email.png" alt="" class="contact_icons"></a>
			<a href="grid.php"><img src="pics/fb.png" alt="" class="contact_icons"></a>
			<a href=""><img src="pics/x.png" alt="" class="contact_icons"></a>
			<a href=""><img src="pics/insta.png" alt="" class="contact_icons"></a>
			<a href=""><img src="pics/phone.png" alt="" class="contact_icons"></a>	
		</div>
		
	</div>
	

<!-- </div>  -->

</body>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="aboutUs.js"></script>

<!-- <script src="aboutUs.js"></script> -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@200&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Neuton:wght@700&family=Raleway:wght@200;600&display=swap');
/*font-family: 'Montserrat', sans-serif;
font-family: 'Poppins', sans-serif;*/


body{
    background-color: rgb(56, 56, 56);
	/* background-image: linear-gradient(to right, rgb(117, 115, 115) 0%, rgb(65, 62, 62) 35%, rgb(56, 56, 56) 100%); */
    display: flex;
    position: relative;
    height: 100vh;
	width: auto;
}
body::after{
    position: absolute;
    background-color: white;
    inset: 0;
    content: "";
    z-index: -1;
    left: 35%;
    clip-path: polygon(
        50% 0,
        100% 0,
        100% 100%,
        5% 100%
    )
}

.contact{
	color: white;
	font-size: 1rem;
	text-transform: uppercase;
	font-family: 'Montserrat', sans-serif;
	position: absolute;
	background-color: red;
	padding: 0 10px;
	height: 5vh;
	margin: auto;
	display: flex;
	justify-content: center;
	align-items: center;
	/* border: 1px solid black; */
	/* border-radius: 5px; */
	border-top-right-radius: 20px;
	border-bottom-right-radius: 20px;
	margin-top: 90vh;
	/* margin-top: 40%; */
	cursor: pointer;
	letter-spacing: 3px;
}
.contact img{
	height: 20px;
	width: 20px;
	/* position: absolute; */
}
.contact_icons{
	margin: 0 20px;
}
.landing{
    /* background-color: orange; */
    margin-top: 4%;
    width: 100%;
	/* display: flex; */
}
.landing span{
	color: red;
}
#car{
    /* float: right; */
    /* margin: 0 5%; */
	margin: 5% 0 0 40%;
    width: 60%;
	position: absolute;
}
h1{
	margin: 10% 0 0 8%;
	/* font-size: 8rem; */
	font-size: 8vw;
	color: white;
	font-family: 'Montserrat', sans-serif;
	text-shadow: 10px 10px 10px black;
	position: absolute;
}
h2{
	position: absolute;
	/* font-size: 3rem; */
	/* font-family: 'Montserrat', sans-serif; */
	font: 2vw 'Poppins', sans-serif;
	font-weight: bolder;
	margin: 20% 0 0 8%;
	padding: 10px 0 0 10px;
	text-transform: uppercase;
	text-shadow: 2px 5px 10px rgb(134, 133, 133);

}
</style>
</html>