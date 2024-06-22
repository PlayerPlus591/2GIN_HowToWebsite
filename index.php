<!-- Bameninhong - Lou -->

<?php
    /*Lou & Deni*/
    session_start();
    if(!isset($_SESSION["user"]))
    {   
        echo '<input onclick="toggleNav()" type="checkbox" id="nav_check" hidden>';
        echo '<label for="nav_check" class="hamburger" id="hamburger">';
        echo '<span>M</span><span>E</span><span>N</span><span>U</span>';
        echo '</label>';
        echo '<p class="welcome">Welcome to our website</p>';
        echo '<div id="mySidenav" class="topnav">';
        echo '<div class="navrow">';
        echo '<div class="navleft">';
        echo '<h2>HowToWebsite</h2>';
        echo '<a class="active" href="index.php">Home</a>';
        echo '<a href="Includes/templatedot.php">Course</a>';
        echo '<a href="Includes/userDashboard.php">Dashboard</a>';
        echo '<a href="Includes/discussion.php">Forum</a>';
        //echo '</div>';
        //echo '<div class="navright">';
        echo '<a href="Includes/register.php">Sign up</a>';
        echo '<a href="Includes/login.php">Log in</a>';  
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }else {
        echo '<input onclick="toggleNav()" type="checkbox" id="nav_check" hidden>';
        echo '<label for="nav_check" class="hamburger" id="hamburger">';
        echo '<span>M</span><span>E</span><span>N</span><span>U</span>';
        echo '</label>';
        echo '<p class="welcome">Welcome to our website</p>';
        echo '<div id="mySidenav" class="topnav">';
        echo '<div class="navrow">';
        echo '<div class="navleft">';
        echo '<h2>HowToWebsite</h2>';
        echo '<a class="active" href="index.php">Home</a>';
        echo '<a href="Includes/templatedot.php">Course</a>';
        echo '<a href="Includes/userDashboard.php">Dashboard</a>';
        echo '<a href="Includes/discussion.php">Forum</a>';
        //echo '</div>';
        //echo '<div class="navright">';
        echo '<a href="Includes/logout.php">Log-out</a>';
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
        <title>HowToWebsite - Homepage</title>
        <link rel="stylesheet" href="CSS/mainpage.css">
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
                    <h1>HowToWebsite</h1>
                </div>

                <br><br>

                <div class="description">
                    <div class="card">
                        <h2>Main Description</h2>
                        <p>When making a website, you might come across a few problems that you can not seem to solve.</p>
                        <p>Here you will learn Step By Step how to make your own website. You will learn how to set up your server and how to
                        use HTML, CSS, JavaScript and more.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <h2>Overview</h2>
                            <ol>
                                <li><p>Ubuntu Server Installation</p></li>
                                <li><p>Ubuntu Server Setup</p></li>
                                <li><p>Visual Studio Code x Server Connection</p></li>
                                <li><p>GitHub x VS Code Connection</p></li>
                                <li><p>Hardcoding your first html page</p></li>
                            </ol>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <h2>Requirements</h2>
                            <ul>
                                <li><p>PC</p></li>
                                <li><p>(Server if you host from home)</p></li>
                                <li><p>Oracle VM VirtualBox</p></li>
                                <li><p>Ubuntu</p></li>
                                <li><p>Visual Studio Code</p></li>
                                <li><p>GitHub</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <br><br><br><br>
                <h1>Contributors</h1>
                <br><br>

                <div class="row" style="justify-content: center; display: flex;">
                    <div class="profilecolumn">
                        <img class="profileimage" src="Images/Flep.webp">
                        <div class="name">Pedro</div>
                        <p>"Hard at work? More like work while hard"</p>
                        <br>
                        <div class="job">MySQL</div>
                        <div class="job">False Information</div>
                    </div>
                    
                    <div class="profilecolumn">
                        <img class="profileimage" src="Images/pfp/pfp_ghost.png">
                        <div class="name">Ghost</div>
                        <p>"Who?"</p>
                        <br>
                        <div class="job">Frontend</div>
                        <div class="job">Design</div>
                    </div>
                    
                    <div class="profilecolumn">
                        <img class="profileimage" src="Images/pfp/pfp_compressed_square.jpg">
                        <div class="name">Deni</div>
                        <p>"PlayerPlus591"</p>
                        <br>
                        <div class="job">Backend/Frontend</div>
                        <div class="job">MySQL</div>
                    </div>
                    
                    <div class="profilecolumn">
                        <img class="profileimage" src="Images/Flep.webp">
                        <div class="name">Alexandro</div>
                        <p>"Hallo Polen"</p>
                        <br>
                        <div class="job">Backend</div>
                        <div class="job">Content</div>
                    </div>
                </div>
                <br><br>

                <div class="footer">
                    <div class="footer">
                        <p>2GIN - 2023/24</p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>