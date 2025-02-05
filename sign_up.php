<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="sign_up.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>SIGN_UP</title>
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

<!-- SIGN UP FORM -->
<div class="container">

    <div class="side-content" data-aos="fade-right">
        <img src="" alt="">
    </div>
    
    <div class="wrapper">
        
        <div class="divform" data-aos="fade-left">

            <div class="heading">
                <img src="reg.svg" alt="">
            </div>
            
            <form method="POST">
                
                <h2>SIGN UP HERE</h2>

                <div class="input-form">
                    <input type="text" for="username" name="firstname" placeholder="First name" required>
                </div>
                <div class="input-form">
                    <input type="text" name="lastname" placeholder="Last name" required>
                </div>
                <div class="input-form">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-form">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-form">
                    <input type="password" for="password" name="password" placeholder="Password" required>
                </div>

                <div class="btn-grid">
                    <button name="submit">SIGN UP</button>
                </div>

                    <h6>Already have an account? <a href="log_in.php">LOG-IN</a></h6><br>
<?php

if (isset($_POST['submit']))    
{
	$fname=$_POST['firstname'];	
	$lname=$_POST['lastname'];
	$usern=$_POST['username'];
	$email=$_POST['email'];
	$pass=$_POST['password'];

	//local and online connection
	include ("connection.php");

	//search record
	$search="SELECT email from hci where (email='$email')";
	$result=mysqli_query($con,$search);
	$output=mysqli_num_rows($result);


	if ($output==0)
	{
		//insert record
		$insert = "INSERT INTO `hci` (`firstname`, `lastname`, `username`, `email`, `password`) VALUES ('$fname', '$lname', '$usern', '$email', '$pass')";
		mysqli_query($con, $insert);
		header('Location: log_in.php');
		
	}
	else 
	{
		print "<font color = 'black'><center>$usern IS EXISTING";
		
	}

    $_SESSION['username'] = $usern;
    // $_SESSION["password"] = $password;
   
}

?>
            </form>

        </div>
    </div>

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

    <script src="aboutUs.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
<style>

/* BODY AND CONTACT ICON STYLE */
body{
    background-color: white;
	display: flex;
    position: relative;
    height: 100vh;
	width: auto;
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
</style>
</html>