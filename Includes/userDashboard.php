<!--Deni Code-->

<?php
    session_start();
    if(!isset($_SESSION["user"]))
    {
        header("Location: login.php");
    }
    else {
        echo '<input onclick="toggleNav()" type="checkbox" id="nav_check" hidden>';
        echo '<label for="nav_check" class="hamburger" id="hamburger">';
        echo '<span>M</span><span>E</span><span>N</span><span>U</span>';
        echo '</label>';
        echo '<p class="welcome">Welcome to our website</p>';
        echo '<div id="mySidenav" class="topnav">';
        echo '<div class="navrow">';
        echo '<div class="navleft">';
        echo '<h2>HowToWebsite</h2>';
        echo '<a href="../index.php">Home</a>';
        echo '<a href="../Includes/templatedot.php">Course</a>';
        echo '<a class="active" href="../Includes/userDashboard.php">Dashboard</a>';
        echo '<a href="../Includes/discussion.php">Forum</a>';
        echo '<a href="../Includes/logout.php">Log-out</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>HowToWebsite - Dashboard</title>
    <link rel="stylesheet" href="../CSS/userDashboard.css">
    <script src="../JS/mobileMenu.js"></script>
</head>
<body>
    <main>
    <div class="canvas">
        <div class="maintitle">
            <h1>Dashboard</h1>
        </div>        
        <br><br>    
        <div class="row">    
            <div class="column">
                <div class="card" style="display: flex; align-items: center;">
                    <img src="../Images/pfp/S-591_Pistol.png" style="border-radius: 50%; width: 80px; height: 80px; margin-right: 20px;" alt="user Picture">
                    <h2><?php echo htmlspecialchars($_SESSION["user"]); ?></h2>
                </div>
                <div class="card">
                    <ul>
                        <li><a class="activeButton" href="../Includes/userDashboard.php">Profile Information</a></li>
                        <li><a class="inactiveButton" href="../Includes/accountSettings.php">Account Settings</a></li>
                    </ul>
                </div>
            </div>
    
            <div class="column">
                <div class="card">
                    <h2>Profile Information</h2>
                    <ul>
                        <h3>Name:</h3>
                        <li><?php echo htmlspecialchars($_SESSION["user"]); ?></li>
                        <br>
                        <h3>Email:</h3>
                        <li><?php echo htmlspecialchars($_SESSION["user"]); ?></li>
                        <br>
                        <h3>Date of Creation:</h3>
                        <li><?php echo htmlspecialchars($_SESSION["user"]); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="footer">
            <div class="footer"><p>2GIN - 2023/24</p></div>
        </div>
    </div>
    </main>     
</body>
</html>