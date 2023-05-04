<?php header("Access-Control-Allow-Origin: *"); ?>
<?php
header('Content-Type: application/json');
$data = file_get_contents('uutiset.json');
echo $data;
?>