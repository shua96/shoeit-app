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

<header class="home">
    <h1>Shoeeees It.</h1>
    <p>Don't hide it - shoe it</p>
</header>
<section class="gallery">
    <h1 id="gallery">Gallery</h1>
    <div class="box-container">
        <div class="box">
            <img src="assets/img/img1.jpeg" alt="Shoe 1">
            <p>Shoe 1</p>
        </div>
        <div class="box">
            <img src="assets/img/img2.jpeg" alt="Shoe 2">
            <p>Shoe 2</p>
        </div>
        <div class="box">
            <img src="assets/img/img3.jpeg" alt="Shoe 3">
            <p>Shoe 3</p>
        </div>
        <div class="box">
            <img src="assets/img/img4.jpeg" alt="Shoe 4">
            <p>Shoe 4</p>
        </div>
        <div class="box">
            <img src="assets/img/img5.jpeg" alt="Shoe 5">
            <p>Shoe 5</p>
        </div>
        <div class="box">
            <img src="assets/img/img6.jpeg" alt="Shoe 6">
            <p>Shoe 6</p>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>
