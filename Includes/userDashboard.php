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
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.left = "0px";
            document.getElementById("hamburger").style.height = "30vw";
    
            // Get all span elements inside the hamburger
            const spans = document.querySelectorAll("#hamburger span");
            
            // Set the line-height for each span
            spans.forEach(span => {
              span.style.lineHeight = "1.5"; // Adjust this value as necessary
            });
        }
    
        function closeNav() {
            document.getElementById("mySidenav").style.left = "-800px";
            document.getElementById("hamburger").style.height = "20vw";
    
            // Get all span elements inside the hamburger
            const spans = document.querySelectorAll("#hamburger span");
            
            // Set the line-height for each span
            spans.forEach(span => {
              span.style.lineHeight = "1"; // Adjust this value as necessary
            });
        }
    
        function toggleNav() {
            var sidenav = document.getElementById("mySidenav");
            if (sidenav.style.left === "0px") {
                closeNav();
            } else {
                openNav();
            }
        }
    </script>
</head>
<body>
    <main>
    <div class="canvas">
        <div class="maintitle">
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION["user"]); ?>!</h1>
        </div>
        
        <br>
        <br>
    
        <div class="row">    
            <div class="column">
                <div class="card" style="display: flex; align-items: center;">
                    <img src="../Images/pfp/S-591_Pistol.png" style="border-radius: 50%; width: 80px; height: 80px; margin-right: 20px;" alt="user Picture">
                    <h2>Profile Placeholder</h2>
                </div>

                <div class="card">
                    <h2>Profile</h2>
                    <ul style="margin-left: 20px;">
                        <li><a href="../Includes/profile.php">Profile</a></li>
                        <li><a href="../Includes/settings.php">Account Settings</a></li>
                        <li><a href="../Includes/appearance.php">Appearance</a></li>
                        <li><a href="../Includes/accessibiliy.php">Accessibility</a></li>
                        <li><a href="../Includes/notifications.php">Notifications</a></li>

                    </ul>
                </div>
            </div>
    
            <div class="column">
                <div class="card">
                    <h2>Placeholder text</h2>
                    <ul>
                        <li><p>more placeholder text</p></li>
                        <li><p>more placeholder text</p></li>
                        <li><p>more placeholder text</p></li>
                        <li><p>more placeholder text</p></li>
                        <li><p>more placeholder text</p></li>
                        <li><p>more placeholder text</p></li>
                    </ul>
                </div>
            </div>
        </div>
    
        <br>
        <br>
        <br>
        <br>
    
        <div class="footer">
            <div class="footer">
                <p>2GIN - 2023/24</p>
            </div>
        </div>
    </div>
    </main>     
</body>
</html>