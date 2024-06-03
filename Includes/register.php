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
    <link rel="stylesheet" href="RegisterAndLoginStyles.css"> <!--Deni Code-->
    <link rel="stylesheet" href="https://unpkg.com/98.css"> <!--Deni Code-->

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
            $sql = "SELECT * FROM users WHERE dtEmail = '$email'";
            $result = mysqli_query($connection,$sql);
            $rowCount = mysqli_num_rows($result);
            if($rowCount>0){
                array_push($errors,"Email already exists!");
            }

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
            <div class="window" style="width: 400px">
                <div class="title-bar">
                  <div class="title-bar-text">Register</div>
                  <div class="title-bar-controls">
                    <button aria-label="Minimize"></button>
                    <button aria-label="Maximize"></button>
                    <button aria-label="Close"></button>
                  </div>
                </div>
                <div class="window-body">
                    <p style="text-align: left; margin-top: 1px">Full Name:</p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
                    </div>
    
                    <p style="text-align: left;">Email:</p>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email:">
                    </div>

                    <p style="text-align: left;">Password:</p>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password:">
                    </div>

                    <p style="text-align: left;">Repeat Password:</p>
                    <div class="form-group">
                        <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
                    </div>
        
                    <div class="form-btn">
                        <input type="submit" class="btn btn-primary" value="Register" name="submit">
                    </div>
                </div>
            </div>
        </form>
        <!--deni--><div><p>Already registered? <a href="login.php">Log-in here!</a></p></div> <!--Deni Code-->
    </div>

</body>
</html>