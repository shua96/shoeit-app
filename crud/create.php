<?php
require_once('database.php');

$operation = $_GET['operation'] ?? null;
if ($operation != "create") {
    return;
}
$submit = $_POST['submit'] ?? null;
if ($submit) {
    $firstname = $_POST['firstname'] ?? null;
    $middlename = $_POST['middlename'] ?? null;
    $lastname = $_POST['lastname'] ?? null;
    $birthdate = $_POST['birthdate'] ?? null;
    $mobile = $_POST['mobile'] ?? null;
    $email = $_POST['email'] ?? null;

    $sql = "INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `birthdate`, `mobile`, `email`) 
            VALUES (NULL, '$firstname', '$middlename', '$lastname', '$birthdate', '$mobile', '$email');";

    query($sql);
}

?>

<section class="pop-up">
    <dialog open>
        <form action="" method="post">
            <input name="firstname" type="text" placeholder="firstname"> <br>
            <input name="middlename" type="text" placeholder="middlename"> <br>
            <input name="lastname" type="text" placeholder="lastname"> <br>
            <input name="birthdate" type="date" placeholder="1999/01/01"> <br>
            <input name="mobile" type="text" placeholder="09123456789"> <br>
            <input name="email" type="text" placeholder="email@email.com"> <br>
            <input name="submit" type="submit" value="Submit">
            <a href="pages/records.php">Cancel</a>
        </form>
    </dialog>
</section>