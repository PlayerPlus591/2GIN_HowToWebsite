<!-- Alexandro -->

<?php
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
        echo '<a href="../index.php">Home</a>';
        echo '<a class="active" href="templatedot.php">Course</a>';
        echo '<a href="userDashboard.php">Dashboard</a>';
        echo '<a href="discussion.php">Forum</a>';
        echo '<a href="register.php">Sign up</a>';
        echo '<a href="login.php">Log in</a>';  
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
        echo '<a href="../index.php">Home</a>';
        echo '<a class="active" href="templatedot.php">Course</a>';
        echo '<a href="userDashboard.php">Dashboard</a>';
        echo '<a href="discussion.php">Forum</a>';
        echo '<a href="logout.php">Log-out</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    $currentPage = 'lexidea.php';
    $nextPage = 'templatedot.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/cours.css">
        <title>How to Website</title>
        <script src="../JS/mobileMenu.js"></script>
    </head>
    <?php
    ?>
    <body>
        <header>
            <div class="maintitle">
                    <h1>Course p.2</h1>
                </div>
                
                <br>
                <br>
        </header>
        
        <main>
            <div class="canvas">
                        <div class="card">
                            <h2>Extra Websites</h2>
                            <div class="content" style="display: block;">
                                <h4>Additional Webpages for inspiration:</h4>
                                <br>
                                <a href="EventRegistration.html">Event Registration Template</a><p>Description: A small webpage that allows you to input email, name and a choice for the prize.</p>
                                <a href="BlogPost.php">Working Blog Post</a><p>Description: A small webpage in which you can send comments which get saved in a file.</p>
                                <a href="buttongame.html">Fun Little ButtonGame</a><p>Description: A small webpage in which you can play a game of clicking a button and avoiding the decoys.</p>
                                <br>
                                <h5> !!!If you want to see the code, right-click the mouse and select the last choice "Inspect" to see the code!!! </h5>
                            </div>
                        </div>

                        <div class="card">
                            <h2>Links for Lerning</h2>
                            <div class="content" style="display: block;">
                                <h4>Here are links for understanding how to write and use correct code for webpages :</h4>
                                <br>
                                <a href="https://www.w3schools.com/" target="”_blank”"> https://www.w3schools.com/ </a><p> A free online educational website for learning coding and the general explanation/understanding of code snippets.</p>
                                <a href="https://www.freecodecamp.org/news/" target="”_blank”"> https://www.freecodecamp.org/news/ </a><p> freeCodeCamp is a charity organization with the goal to help people learn to code for free by showing videos, articles and interactive coding lessons.</p>
                                <a href="https://www.codecademy.com/" target="”_blank”"> https://www.codecademy.com/ </a><p> Codecademy is an American online interactive platform that offers free coding classes in 12 different programming languages including Python, Java, Go, and so on. </p>
                                <a href="https://www.khanacademy.org/" target="”_blank”"> https://www.khanacademy.org/ </a><p> A nonprofit which provides a wide range of free education classes in all domaines for anyone and has some good beginner courses on web programming.</p>
                                
                            </div>
                        </div>

                        <div class="card">
                            <div class="navigation-buttons">
                                <a href="<?php echo $nextPage; ?>" class="button">Previous</a>
                                <a href="<?php echo $currentPage; ?>" class="button">Next</a>
                            </div>
                        </div>
                        

                        
                
            </div>
        </main>
    </body>
    <script> 
    </script>
    </body>
</html>