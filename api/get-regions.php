<?php
require_once('../crud/database.php');

$filter = $_GET['filter'] ?? null;
$sql = "SELECT DISTINCT `region` FROM `barangays`";
$result = query($sql);
$records = $result->fetch_all(1);

header('Content-type: Application/json');
echo json_encode(array_column($records, 'region'));
