<?php
require_once('database.php');


$search = $_GET['search'] ?? null;
if ($search) {
    $sql = "SELECT * FROM `users` WHERE 
            `firstname` LIKE '%$search%' OR 
            `middlename` LIKE '%$search%' OR 
            `lastname` LIKE '%$search%' OR 
            `birthdate` LIKE '%$search%' OR 
            `mobile` LIKE '%$search%' OR 
            `email` LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM `users`";
}

$result = query($sql);
$records = $result->fetch_all(1);

?>

<div class="wrapper">

    <div class="table">

        <div class="row header">
            <div class="cell">
                First Name
            </div>
            <div class="cell">
                Middle Name
            </div>
            <div class="cell">
                Last Name
            </div>
            <div class="cell">
                Birthdate
            </div>
            <div class="cell">
                Mobile
            </div>
            <div class="cell">
                Email
            </div>
            <div class="cell">
                Actions
            </div>
        </div>


        <?php
        foreach ($records as $record) {
            echo "<div class='row'>
                    <div class='cell'>$record[firstname]</div>
                    <div class='cell'>$record[middlename]</div>
                    <div class='cell'>$record[lastname]</div>
                    <div class='cell'>$record[birthdate]</div>
                    <div class='cell'>$record[mobile]</div>
                    <div class='cell'>$record[email]</div>
                    <div class='cell'>
                    <a href='pages/records.php?operation=update&id=$record[id]' class='material-symbols-outlined'>
                        edit_note
                    </a>
                    <a href='pages/records.php?operation=delete&id=$record[id]' class='material-symbols-outlined'>
                        delete
                    </a>
                    </div>
                </div>";
        }
        ?>

    </div>

</div>