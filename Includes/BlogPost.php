<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog Post with Comments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .post {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }
        h1, h2, h3 {
            margin-bottom: 10px;
        }
        p {
            margin-bottom: 15px;
        }
        .comments {
            margin-top: 30px;
        }
        .comment {
            margin-bottom: 15px;
            padding: 10px;
            background: #f0f0f0;
            border-radius: 5px;
        }
        form {
            margin-top: 20px;
        }
        textarea, input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="post">
            <h1>Blog Post Title</h1>
            <p>Posted on June 22, 2024</p>
            <p>This is a sample blog post content.</p>
        </div>
        
        <div class="comments">
            <h2>Comments</h2>
            <?php
            
            function save_comment($name, $comment) {
                $file = 'comments.txt';
                $data = "$name\n$comment\n\n";
                file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
            }
            
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && isset($_POST['comment'])) {
                $name = htmlspecialchars($_POST['name']);
                $comment = htmlspecialchars($_POST['comment']);
                
                save_comment($name, $comment);
            }
            
            
            $file = 'comments.txt';
            if (file_exists($file) && filesize($file) > 0) {
                $comments = file_get_contents($file);
                $comments_arr = explode("\n\n", $comments);
                foreach ($comments_arr as $comment) {
                    
                    if (!empty($comment)) {
                        $comment_data = explode("\n", $comment);
                        if (isset($comment_data[0]) && isset($comment_data[1])) {
                            echo '<div class="comment">';
                            echo '<strong>' . htmlspecialchars($comment_data[0]) . '</strong><br>';
                            echo '<p>' . nl2br(htmlspecialchars($comment_data[1])) . '</p>';
                            echo '</div>';
                        }
                    }
                }
            } else {
                echo '<p>No comments yet.</p>';
            }
            ?>
            
            <form action="#" method="POST">
                <h3>Leave a Comment</h3>
                <input type="text" name="name" placeholder="Your Name" required><br>
                <textarea name="comment" rows="4" placeholder="Your Comment" required></textarea><br>
                <button type="submit">Submit Comment</button>
            </form>
        </div>
    </div>
</body>
</html>
