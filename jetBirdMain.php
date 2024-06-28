<?php #deny access to main page if user not logged in 
session_start();
if(!isset($_SESSION["user"])){
    header("Location: jetBirdLogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="jetBirdStyle.css">
</head>
<body>
    <div class="container">
        <h1>Welcome Travelers!</h1>
        <a href="jetBirdLogout.php" class="btn btn-primary">Logout</a>
    </div>
</body>
</html>