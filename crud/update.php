<?php
require_once('database.php');

$operation = $_GET['operation'] ?? null;
if ($operation != "update") {
    return;
}

$id = $_GET['id'] ?? null;
$sql = "SELECT * FROM `users` WHERE `id` = $id";
$result = query($sql);
$record = $result->fetch_assoc();

$submit = $_POST['submit'] ?? null;
if ($submit) {
    $id = $_GET['id'] ?? null;
    $firstname = $_POST['firstname'] ?? null;
    $middlename = $_POST['middlename'] ?? null;
    $lastname = $_POST['lastname'] ?? null;
    $birthdate = $_POST['birthdate'] ?? null;
    $mobile = $_POST['mobile'] ?? null;
    $email = $_POST['email'] ?? null;

    $sql = "UPDATE `users` SET 
                    `firstname` = '$firstname', 
                    `middlename` = '$middlename', 
                    `lastname` = '$lastname', 
                    `birthdate` = '$birthdate', 
                    `mobile` = '$mobile ', 
                    `email` = '$email' WHERE 
                    `users`.`id` = $id;";
    $result = query($sql);
    header("Location: ../pages/records.php");
}

?>

<dialog open>
    <h1>Updating... <?= $id ?></h1>
    <form action="" method="post">
        <input name="id" type="hidden" value="<?= $record['id'] ?>"> <br>
        <input name="firstname" type="text" placeholder="firstname" value="<?= $record['firstname'] ?>"> <br>
        <input name="middlename" type="text" placeholder="middlename" value="<?= $record['middlename'] ?>"> <br>
        <input name="lastname" type="text" placeholder="lastname" value="<?= $record['lastname'] ?>"> <br>
        <input name="birthdate" type="date" placeholder="birthdate" value="<?= $record['birthdate'] ?>"> <br>
        <input name="mobile" type="text" placeholder="mobile" value="<?= $record['mobile'] ?>"> <br>
        <input name="email" type="text" placeholder="email" value="<?= $record['email'] ?>"> <br>
        <input name="submit" type="submit">
        <a href="pages/records.php">Cancel</a>
    </form>
</dialog>