<!--Deni Code-->

<?php
    session_start();
    if(isset($_SESSION["user"]))
    {
        header("Location: userDashboard.php");
    }
?>

<!--Deni Code-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="../CSS/RegisterAndLoginStyles.css"> <!-- Lou -->
        <link rel="stylesheet" href="https://unpkg.com/98.css">
        <link rel="stylesheet" href="../CSS/RegisterAndLoginStyles.css"> <!-- Lou -->
    </head>
    <body>
        <div class="container">
            <?php
                if(isset($_POST["login"]))
                {
                    $email = $_POST["email"];
                    $password = $_POST["password"];

                    require_once "database.php";
                    $sql = "SELECT * FROM users WHERE dtEmail = '$email'";
                    $result = mysqli_query($connection, $sql);
                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if($user) {
                        if(password_verify($password, $user["dtPassword"])) {
                            session_start();
                            $_SESSION["user"] = $user["dtName"];
                            header("Location: userDashboard.php");
                            die();
                        }else{
                            echo "<div class='alert alert-danger'>Email or Password does not match</div>";
                        } 
                    }else {
                        echo "<div class='alert alert-danger'>Email or Password does not match</div>";
                    } 
                }
            ?>

            <form action="login.php" method="post">
                <div class="window">
                    <div class="title-bar">
                      <div class="title-bar-img">
                        <img src="https://win98icons.alexmeub.com/icons/png/users_key-5.png" alt="login Picture">
                      </div>
                      <div class="title-bar-text">Login</div>
                      <div class="title-bar-controls">
                        <button class="button" aria-label="Minimize"></button>
                        <button class="button" aria-label="Maximize"></button>
                        <button class="button" aria-label="Close"></button>
                      </div>
                    </div>
                    <div class="window-body">
                        <p style="text-align: left; margin-top: 1px; font-size: 18px; margin-bottom: 5px">Email:</p>
                        <div class="form-group">
                            <input type="email" placeholder="Enter Email:" name="email" class="form-control" style="padding: 15px; font-size: 15px; margin-top: 10px;">
                        </div>
                        <p style="text-align: left; font-size: 18px; margin-bottom: 5px">Password:</p>
                        <div class="form-group">
                            <input type="password" placeholder="Enter Password:" name="password" class="form-control" style="padding: 15px; font-size: 15px; margin-top: 10px;">
                        </div>
                        <div class="form-btn">
                            <input type="submit" value="Login" name="login" class="btn btn-primary" style="padding: 18px; font-size: 18px; margin-top: 20px;">
                        </div>
                    </div>
                  </div>
            </form>
            <div style="font-size: 15px;"><p>No registered yet? <a href="register.php">Register here!</a></p></div>
        </div>
    </body>
</html>