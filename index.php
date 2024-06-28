<?php #if user is already logged in then there is no need to register page 
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
    <title>JetBird Register Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="jetBirdStyle.css">
</head>
<body>
    <div class="container">
        <?php
        if(isset($_POST["submitBttn"])){
            $fullnameJB = $_POST["fullname"];
            $emailJB = $_POST["email"];
            $passwordJB = $_POST["password"];
            $repeatPasswordJB = $_POST["repeatPassword"];
            $passwordHashJB = password_hash($passwordJB, PASSWORD_DEFAULT); #password encryption.
            $errorsJB = array();

            #check if all field is empty.
            if(empty($fullnameJB) OR empty($emailJB) OR empty($passwordJB) OR empty($repeatPasswordJB)){
                array_push($errorsJB, "All fields are required!");
            }
            #validate email.
            if(!filter_var($emailJB, FILTER_VALIDATE_EMAIL)){
                array_push($errorsJB, "Please use a valid email!");
            }
            #password requirment.
            if(strlen($passwordJB)<8){
                array_push($errorsJB, "The password must at least contain 8 characters long!");
            }
            #check password match.
            if($passwordJB!==$repeatPasswordJB){
                array_push($errorsJB, "The password does not match!");
            }
            #check existing email
            require_once "jetBirdDB.php"; #connect to db
            $sqlEmail = "SELECT * FROM jetbirduser WHERE email = '$emailJB'"; 
            $sqlResult = mysqli_query($connectJB, $sqlEmail);
            $sqlRows = mysqli_num_rows($sqlResult);
            if($sqlRows>0){
                array_push($errorsJB, "Email already exists!");
            }
            #check for errors.
            if(count($errorsJB)>0){
                foreach ($errorsJB as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }else {
                $sql = "INSERT INTO jetbirduser(fullName, email, password) VALUES ( ?, ?, ? )";
                $stmt = mysqli_stmt_init($connectJB);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if($prepareStmt){
                    mysqli_stmt_bind_param($stmt, "sss", $fullnameJB, $emailJB, $passwordHashJB);
                    mysqli_execute($stmt);
                    echo "<div class='alert alert-success'>Register Complete!</div>";
                }else {
                    die("Error..");
                }
            }
        }
        ?>
        <form action="index.php" method="post">
            <div class="jetBirdForm">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name">
            </div>
            <div class="jetBirdForm">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="jetBirdForm">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="jetBirdForm">
                <input type="password" class="form-control" name="repeatPassword" placeholder="Repeat Password">
            </div>
            <div class="jetBirdForm">
                <input type="submit" class="btn btn-primary" value="Register" name="submitBttn">
            </div>
        </form>
        <div>
            <div><p>Already have an Account? <a href="jetBirdLogin.php">Login here</a></p></div>
        </div>
    </div>
</body>
</html>