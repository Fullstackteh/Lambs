<?php header("Access-Control-Allow-Origin: *"); ?>
<?php
header('Content-Type: application/json');
$data = file_get_contents('keikat.json');
echo $data;
?>