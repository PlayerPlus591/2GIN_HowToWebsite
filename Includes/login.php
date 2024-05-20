<!--Deni Code-->

<?php
    session_start();
    if(isset($_SESSION["user"]))
    {
        header("Location: userDashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
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
                <div class="form-group">
                    <input type="email" placeholder="Enter Email:" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Enter Password:" name="password" class="form-control">
                </div>
                <div class="form-btn">
                    <input type="submit" value="Login" name="login" class="btn btn-primary">
                </div>
            </form>
            <div><p>No registered yet? <a href="register.php">Register here!</a></p></div>
        </div>
    </body>
</html>