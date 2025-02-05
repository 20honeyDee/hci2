<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="home.css">
    <title>HOME</title>
</head>

<body>

    <!-- NAVIGATION BAR -->
    <div class="navigation">
        <div class="navbar">
        
            <nav>
                
            <img src="logo.png" id="logo">
                <div class="dropdown">
                <a href="#" class="dropbtn"><img src="pics/dp.png" id="dp"></a>
                
                    <div class="dropdown-content">
                        <h6>Username: <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?></h6>
                        <a href="display.php">HOME</a>
                        <a href="log_out.php">LOG OUT</a>
                        <a href="account.php">ACCOUNT</a>
                    </div>
                </div>
    
            </nav>

        </div>
        <hr>
    </div>

    <!-- FOUR ELEMENTS -->
    <div class="element">
        <div class="inside-element">
            
            <a href="fundamental.php" class="one">
                <div><h4>FUNDAMENTALS OF DRIVING</h4></div>
            </a>
            <a href="RoadSign.php" class="two">
                <div><h4>ROAD SIGNS</h4></div>
            </a>
            <a href="laws.php" class="three">
                <div><h4>LAWS AND VIOLATIONS</h4></div>
            </a>
            <a href="fines (2).php" class="four">
                <div><h4>FINES</h4></div>
            </a>
            
        </div>
    </div>

</body>
<style>
body{
    background-color: #829d93;
}
.dropdown-content h6{
    color: black;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;

    /* background-color: red; */
}
</style>

</html>
