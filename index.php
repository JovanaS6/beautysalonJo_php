<?php
include "dbBroker.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <link rel="stylesheet" href="css/style.css">
    <?php include('templates/header.php'); ?>


    
    <div class="hero">
            <div class="banner">
                <div class="left-column">
                <h1>Beauty salon<span> Jovana</span></h1>
                <h3>It is our goal to <span>exceed your expectations.</span></h3>
                <p>Our goal is that every client receives an outstanding service from the time they walk in, to the time they walk out.<br> We want our clients to love us so much that they would refer us their friends, their family, and even complete strangers who approach them at the grocery store. We aim to create Salon Angela enthusiasts.</p>
                <div class="btn">
                    <button type="button">Learn more</button>
                    <a href="main.php" class="primary-btn">Make an appointment</a>
                </div>
            </div>
                <div class="right-column">
                    <img src="img/home.png">
                </div>
</div>
</div>
<?php include('templates/footer.php'); ?>
</html>