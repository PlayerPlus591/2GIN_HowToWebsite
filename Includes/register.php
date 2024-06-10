<!--Pedro Code-->

<?php //Deni Code
    session_start();
    if(isset($_SESSION["user"]))
    {
        header("Location: userDashboard.php");
    }
?>

<!--Pedro Code-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="icon" href="../Images/icons/network_internet_pcs_installer-1.png" type="image/x-icon">
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
        //Checks if everything is set
        if (isset($_POST["submit"])) {
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];

            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();

            //adds element to the error array
            if(empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)){
                array_push($errors,"All fields are required");
            }
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                array_push($errors,"Email is not valid");
            }
            if(strlen($password)< 8){
                array_push($errors,"Password must be 8 characters long");
            }
            if($password !== $passwordRepeat){
                array_push($errors,"Password does not match!");
            }

            require_once "database.php";


            //if errors array is empty, no informations are being put in the database
            if(count($errors)>0){
                foreach($errors as $error){
                echo"<div class='alert alert-danger'>$error</div>";     
                }
            }else{
                
                //? = placeholder
                $sql = "INSERT INTO users (dtName, dtEmail, dtPassword) VALUES ( ?, ?, ?)";
                $stmt = mysqli_stmt_init($connection);
                //gives true or false
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                if($prepareStmt){
                    mysqli_stmt_bind_param($stmt,"sss",$fullName,$email,$password_hash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                }else{
                    die("Something went wrong");
                }
            }
        }
        ?>

        <form action="register.php" method="post"> <!--Deni & Filip Code-->
            <div class="window" style="height: 480px;">
                <div class="title-bar">
                    <div class="title-bar-img">
                        <img src="../Images/icons/network_internet_pcs_installer-1.png" alt="login Picture">
                    </div>
                    <div class="title-bar-text">Register</div>
                    <div class="title-bar-controls">
                        <!--Deni Code-->
                        <button aria-label="Minimize" type="button" onclick="redirectToHome()"></button>
                        <button aria-label="Maximize" type="button" onclick="toggleFullscreen()"></button>
                        <button aria-label="Close" type="button" onclick="redirectToHome()"></button>
                    </div>
                </div>
                <div class="window-body">
                    <p style="text-align: left; margin-top: 1px; font-size: 18px; margin-bottom: 5px">Full Name:</p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="fullname" placeholder="Full Name:" style="padding: 15px; font-size: 15px; margin-top: 10px;">
                    </div>
    
                    <p style="text-align: left; font-size: 18px; margin-bottom: 5px">Email:</p>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email:" style="padding: 15px; font-size: 15px; margin-top: 10px;">
                    </div>

                    <p style="text-align: left; font-size: 18px; margin-bottom: 5px">Password:</p>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password:" style="padding: 15px; font-size: 15px; margin-top: 10px;">
                    </div>

                    <p style="text-align: left; font-size: 18px; margin-bottom: 5px">Repeat Password:</p>
                    <div class="form-group">
                        <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:" style="padding: 15px; font-size: 15px; margin-top: 10px;">
                    </div>
        
                    <div class="form-btn">
                        <input type="submit" class="btn btn-primary" value="Register" name="submit" style="padding: 18px; font-size: 18px; margin-top: 20px;">
                    </div>
                </div>
            </div>
        </form>
        <!--deni--><div style="font-size: 15px;"><p>Already registered? <a href="login.php">Log-in here!</a></p></div> <!--Deni Code-->
    </div>

</body>
</html>