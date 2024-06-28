<?php #if user is already logged in then there is no need to login page 
session_start();
if(isset($_SESSION["user"])){
    header("Location: jetBirdMain.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jetBird Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="jetBirdStyle.css">
</head>
<body>
    <div class="container">
        <?php
        if(isset($_POST["login"])){
            $emailJB = $_POST["email"];
            $passwordJB = $_POST["password"];
            require_once "jetBirdDB.php";
            $sqlEmail = "SELECT * FROM jetbirduser WHERE email = '$emailJB'";
            $sqlResult = mysqli_query($connectJB, $sqlEmail);
            $user = mysqli_fetch_array($sqlResult, MYSQLI_ASSOC);
            if($user){
                if(password_verify($passwordJB, $user["password"])){
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: jetBirdMain.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Incorrect Password!</div>";
                }
            }else {
                echo "<div class='alert alert-danger'>Email doesn not exist!</div>";
            }
        }
        ?>
        <form action="jetBirdLogin.php" method="post">
            <div class="jetBirdForm">
                <input type="email" placeholder="Enter Email" name="email" class="form-control">
            </div>
            <div class="jetBirdForm">
                <input type="password" placeholder="Enter Password" name="password" class="form-control">
            </div>
            <div class="jetBirdForm">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
        </form>
        <div>
            <div><p>Not registered? <a href="index.php">Register here</a></p></div>
        </div>
    </div>
</body>
</html>