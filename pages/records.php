<?php include('../includes/header.php') ?>

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

<?php include('../includes/footer.php') ?>