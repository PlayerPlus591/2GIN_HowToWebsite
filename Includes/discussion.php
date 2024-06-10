<!--Filipe-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion page</title>
    <link rel="stylesheet" href="../CSS/Comments.css">
</head>
<body>
<div class="container">
    <form action="" method="post">
        <h3 id="title">Leave a Comment</h3>
        <input type="hidden" name="reply_id" id="reply_id">
        <input type="text" name="name" placeholder="Your name" required>
        <textarea name="comment" placeholder="Your comment" required></textarea>
        <p></p>
        <button class="submit" type="submit" name="submit">Submit</button>
    </form>
</div>

<script>
    function reply(id, name) {
        const title = document.getElementById('title');
        title.innerHTML = "Reply to " + name;
        document.getElementById('reply_id').value = id;
    }
</script>
</body>
</html>

<?php
require_once "database.php";

// Function to render nested replies
function renderReplies($reply_id, $connection) {
    $replies = mysqli_query($connection, "SELECT * FROM tb_data WHERE reply_id = $reply_id");
    if (mysqli_num_rows($replies) > 0) {
        echo '<div class="replies">';
        while ($reply_data = mysqli_fetch_assoc($replies)) {
            echo '<div class="reply">';
            echo '<h4>' . htmlspecialchars($reply_data['name'], ENT_QUOTES, 'UTF-8') . '</h4>';
            echo '<p>' . htmlspecialchars($reply_data['date'], ENT_QUOTES, 'UTF-8') . '</p>';
            echo '<p>' . htmlspecialchars($reply_data['comment'], ENT_QUOTES, 'UTF-8') . '</p>';
            echo '<button class="reply" onclick="reply(' . $reply_data['id'] . ', \'' . htmlspecialchars($reply_data['name'], ENT_QUOTES, 'UTF-8') . '\');">Reply</button>';
            // Recursively render nested replies
            renderReplies($reply_data['id'], $connection);
            echo '</div>';
        }
        echo '</div>';
    }
}

if (isset($_POST["submit"])) {
    // Prepare the SQL statement with placeholders
    $stmt = $connection->prepare("INSERT INTO tb_data (name, comment, date, reply_id) VALUES (?, ?, ?, ?)");

    // Bind parameters to the prepared statement
    $stmt->bind_param("sssi", $name, $comment, $date, $reply_id);

    // Set the values of parameters
    $name = $_POST["name"];
    $comment = $_POST["comment"];
    $date = date('F d Y, h:i:s A');
    $reply_id = $_POST["reply_id"] ?? 0; // Default reply_id to 0 if not set

    // Execute the prepared statement
    if (!$stmt->execute()) {
        die("Error executing query: " . $stmt->error);
    }
}

// Fetch and display comments
$datas = mysqli_query($connection, "SELECT * FROM tb_data WHERE reply_id = 0");
while ($data = mysqli_fetch_assoc($datas)) {
    // Pass the connection variable to comment.php
    include 'comment.php';
}
?>

