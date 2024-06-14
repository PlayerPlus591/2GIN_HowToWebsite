<!--Deni Code-->

<?php
    session_start();
    if(!isset($_SESSION["user"]))
    {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="../CSS/mainpage.css">
</head>
<body>
    <Header>
        <p style="margin: 0px; padding-top: 10px; background-color: #1A4D2E; text-align: center; color: white;">Welcome to User Dashboard</p>
        <div class="topnav">
            <div class="row">
                <div class="navleft">
                    <a class="active" href="../index.php">Home</a>
                    <a href="../Includes/templatedot.php">Course</a>
                    <a href="../Includes/userDashboard.php" style="background-color: #32CD32;">Dashboard</a>
                    <a href="../Includes/discussion.php">Forum</a>
                </div>

                <div class="navright">
                    <a href="../Includes/logout.php">Log-out</a>
                </div>
            </div>
        </div>
    </Header>

    <main>
    <div class="canvas">
        <div class="maintitle">
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION["user"]); ?>!</h1>
        </div>
        
        <br>
        <br>
    
        <div class="row">    
            <div class="column" style="width: 30%;">
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
    
            <div class="column" style="width: 70%;">
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