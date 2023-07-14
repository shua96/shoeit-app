<?php
function query($sql)
{
    $conn = mysqli_connect('localhost', 'shoeit', 'shoeit', 'shoeit');
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
