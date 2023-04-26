<?php
$mysqli = new mysqli('localhost:3307', 'root', '');

if ($mysqli->connect_error) {
    echo "Connection error";
} else {
    $mysqli->select_db('tax');
}

if (isset($_POST['submit'])) {

    $vat_amount = $_POST['vat_amount'];
    $vat = (13 / 100) * $vat_amount;
    echo '<script> alert("' . $vat . '")</script>';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="vat.css">
    <title>Home </title>
</head>

<body>
    <section class="nav">
        <div class="logo">
            <img src="splash1.png" alt="Splash Screen">
        </div>
        <div class="navbar">
            <a class="active" href="home.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php">Contact Us</a>
            <a href="help.php">Help</a>
            <a href="setting.php">Settings</a>
        </div>
        <input class="input" name="text" placeholder="Search..." type="search">
        <div class="user">
            <img src="user.png" alt="User">
        </div>
    </section>


    <section class="mainform">
        <div class="hh">
            <h3>Tax Calculator</h3>
        </div>
        <div class="bb1">
            <h5>Nepal : 13%</h5>
        </div>
        <div class="bb2">
            <h6>You need to fill in two fields. Do not fill in the currency.</h6>
        </div>
        <form action="" method="post">
            <div class="third">
                <div class="inputbox">
                    <span class="details">VAT % = 13%</span>
                    <!-- <input type="text"  required>   -->
                </div>
                <!-- <div class="inputbox">
                <span class="details">Pre- VAT Price: </span>
                <input type="text" placeholder="Enter Pre- VAT Price" required>  
            </div>
            <div class="inputbox">
                <span class="details">Sale Price: </span>
                <input type="text" placeholder="Enter your Sale Price" required>  
            </div> -->
                <div class="inputbox">
                    <span class="details">VAT Amount: </span>
                    <input type="text" name="vat_amount" placeholder="Enter your Vat Amount" required>
                </div>
                <div class="container">
                    <button name="submit">Calculate Tax</button>
                    <!-- <div class="button">
                    <input type="submit" name="submit" value="Sign Up">
                </div> -->
                    <button>Clear All</button>
                </div>
            </div>
        </form>
    </section>
</body>

</html>