<?php
include __DIR__ . "/db.php";
// var_dump($discs);
header("Content-type: application/json");

echo json_encode($discs);
?>
