<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua">
    <meta name="description" content="We are a shoe brand">
    <meta name="keywords" content="shoes, brand new, branded, original">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Shoe It</title>
</head>

<body>
    <main>
        <nav>
            <a class="push-right" href="index.php">
                <img src="assets/img/logo.png" alt="Shoe It Logo">
            </a>
            <a href="#">Home</a>
            <a href="#gallery">Gallery</a>
            <a href="pages/about.php">About Us</a>
            <a href="pages/contact.php">Contact Us</a>
            <a href="pages/records.php">Records</a>
        </nav>

<section class="record-section">
    <a href="http://localhost/shoeit-app/pages/records.php?operation=create">CREATE</a>
    <?php
    include_once('../crud/create.php');
    include_once('../crud/read.php');
    include_once('../crud/update.php');
    include_once('../crud/delete.php');
    ?>
</section>
<script src="assets/js/script.js"></script>

<footer>&copy;Shoe It, 2023. All Rights Reserved</footer>
</main>
</body>

    </html>
