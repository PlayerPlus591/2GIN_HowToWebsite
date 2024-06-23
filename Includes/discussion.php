<!--Filipe-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HowToWebsite - Forum</title>
    <link rel="stylesheet" href="../CSS/discussions.css">
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
    <script src="../JS/discussionScroll.js"></script>
</head>
<body>

<?php
/*Lou */
session_start();
require_once "database.php";

// Check if the user is logged in
if (!isset($_SESSION["user"])) {
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
    echo '<a href="../Includes/userDashboard.php">Dashboard</a>';
    echo '<a class="active" href="../Includes/discussion.php">Forum</a>';
    echo '<a href="../Includes/register.php">Sign up</a>';
    echo '<a href="../Includes/login.php">Log in</a>';  
    echo '</div>';
    echo '</div>';
    echo '</div>';
} else {
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
    echo '<a href="../Includes/userDashboard.php">Dashboard</a>';
    echo '<a class="active" href="../Includes/discussion.php">Forum</a>';
    echo '<a href="../Includes/logout.php">Log-out</a>'; 
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>

<!--Lou-->
<header>
    <div class="maintitle">
        <h1>Forum</h1>
    </div>
</header>

<br>
<div class="container">
    <?php if (isset($_SESSION["user"])): ?>
    <form action="" method="post">
        <h3 id="title">Leave a Comment</h3>
        <input type="hidden" name="reply_id" id="reply_id">
        <textarea name="comment" placeholder="Your comment" required></textarea>
        <p></p>
        <button class="submit" type="submit" name="submit">Submit</button>
    </form>
    <?php else: ?>
    <p>Please <a href="login.php">log in</a> to leave a comment.</p>
    <?php endif; ?>
</div>

</body>
</html>

<?php
// Function to render nested replies
function renderReplies($reply_id, $connection) {
    $replies = mysqli_query($connection, "SELECT * FROM tb_data WHERE reply_id = $reply_id");
    if (mysqli_num_rows($replies) > 0) {
        echo '<div class="card">';
        echo '<div class="replies">';
        while ($reply_data = mysqli_fetch_assoc($replies)) {
            echo '<div class="reply">';
            echo '<h4>' . htmlspecialchars($reply_data['username'], ENT_QUOTES, 'UTF-8') . '</h4>';
            echo '<p>' . htmlspecialchars($reply_data['date'], ENT_QUOTES, 'UTF-8') . '</p>';
            echo '<p>' . htmlspecialchars($reply_data['comment'], ENT_QUOTES, 'UTF-8') . '</p>';
            echo '<button class="reply" onclick="reply(' . $reply_data['id'] . ', \'' . htmlspecialchars($reply_data['username'], ENT_QUOTES, 'UTF-8') . '\');">Reply</button>';
            // Recursively render nested replies
            renderReplies($reply_data['id'], $connection);
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }
}

if (isset($_POST["submit"])) {
    if (!isset($_SESSION["user"])) {
        echo '<p>Please log in to post a comment.</p>';
    } else {
        // Prepare the SQL statement with placeholders
        $stmt = $connection->prepare("INSERT INTO tb_data (username, comment, date, reply_id) VALUES (?, ?, ?, ?)");

        // Bind parameters to the prepared statement
        $stmt->bind_param("sssi", $username, $comment, $date, $reply_id);

        // Set the values of parameters
        $username = $_SESSION["user"];
        $comment = $_POST["comment"];
        $date = date('F d Y, h:i:s A');
        $reply_id = $_POST["reply_id"] ?? 0; // Default reply_id to 0 if not set

        // Execute the prepared statement
        if (!$stmt->execute()) {
            die("Error executing query: " . $stmt->error);
        }

        // Redirect to the same page to prevent form resubmission
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}

// Fetch and display comments
$datas = mysqli_query($connection, "SELECT * FROM tb_data WHERE reply_id = 0");
while ($data = mysqli_fetch_assoc($datas)) {
    // Pass the connection variable to comment.php
    include 'comment.php';
}
?>
