<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JetBird Bookings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="jetBirdStyle.css">
</head>

<body>
    <section class="jetBirdBooking">
        <?php
        $connection = mysqli_connect('localhost', 'root', '', 'book_db');
        if (isset($_POST['send'])) {
            $nameJB = $_POST['name'];
            $emailJB = $_POST['email'];
            $phoneJB = $_POST['phone'];
            $addressJB = $_POST['address'];
            $locationJB = $_POST['location'];
            $guestsJB = $_POST['guests'];
            $arrivalsJB = $_POST['arrivals'];
            $leavingJB = $_POST['leaving'];

            $sqlRequest = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$nameJB', '$emailJB', '$phoneJB', '$addressJB', '$locationJB', '$guestsJB', '$arrivalsJB', '$leavingJB')";

            mysqli_query($connection, $sqlRequest);// connects to db
            echo "<div class='alert alert-success'>Register Complete!</div>";
        } 
        ?>
        <h1>Book your trip!</h1>
        <form action="jetBirdBooking.php" method="post" class="jetBirdBookForm">
            <div class="flex">
                <div class="inputBox">
                    <span>Name : </span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>Email : </span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>Phone: </span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>address : </span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>Where to : </span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>How many : </span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>Arrivals : </span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>Leaving : </span>
                    <input type="date" name="leaving">
                </div>
            </div>
            <input type="submit" value="submit" class="btn btn-primary" name="send">
        </form>
    </section>
</body>

</html>