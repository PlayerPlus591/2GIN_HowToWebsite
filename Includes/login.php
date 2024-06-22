<!--Deni Code-->

<input?php
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
        <link rel="icon" href="../Images/icons/users_key-5.png" type="image/x-icon"> 
        <link rel="stylesheet" href="https://unpkg.com/98.css">
        <link rel="stylesheet" href="../CSS/RegisterAndLoginStyles.css">

        <!--Deni Code-->
        <script>
            function redirectToHome() {
                console.log("Redirecting to home...");
                window.location.href="../index.php";
            }
    
            function toggleFullscreen() {
                if (!document.fullscreenElement) { //if document isn't in fullscreen
                    document.documentElement.requestFullscreen().catch(err => {
                        //give error with the error message attached
                        alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
                    });
                } else {
                    if (document.exitFullscreen) {
                        //document
                        document.exitFullscreen();
                    }
                }
            }
        </script>
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
                        <img src="../Images/icons/users_key-5.png" alt="login Picture">
                      </div>
                      <div class="title-bar-text">Login</div>
                      <div class="title-bar-controls">
                        <!--Deni Code-->
                        <button aria-label="Minimize" type="button" onclick="redirectToHome()"></button>
                        <button aria-label="Maximize" type="button" onclick="toggleFullscreen()"></button>
                        <button aria-label="Close" type="button" onclick="redirectToHome()"></button>
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
            <div class="form-btn" style="font-size: 15px;">
                <button onclick="location.href = 'register.php';" class="btn btn-primary">Register</button>
                <br>
                <button onclick="location.href = '../index.php';" class="btn btn-primary">Back</button>
            </div>
        </div>
    </body>
</html>