<?php
require_once('../crud/database.php');

$filter = $_GET['filter'] ?? null;
$sql = "SELECT DISTINCT `city` FROM `barangays` WHERE `province` LIKE '$filter'";
$result = query($sql);
$records = $result->fetch_all(1);

header('Content-type: Application/json');
echo json_encode(array_column($records, 'city'));
