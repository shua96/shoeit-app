<?php
require_once('database.php');

$operation = $_GET['operation'] ?? null;
if ($operation != "delete") {
    return;
}

$id = $_GET['id'] ?? null;
$submit = $_POST['submit'] ?? null;
if ($submit) {
    $sql = "DELETE FROM users WHERE `users`.`id` = $id";
    query($sql);
    header("Location: ../pages/records.php");
}
?>

<dialog open>
    <h1>Do you want to delete <?= $id ?>?</h1>
    <form action="" method="post">
        <input name="id" type="hidden">
        <input name="submit" type="submit">
        <a href="pages/records.php">Cancel</a>
    </form>
</dialog>