<?php
    header("Access-Control-Allow-Origin: *");

    include('config.php');

    $kysely = "SELECT uutisetID, otsikko, uutinen, DATE_FORMAT(uutispvm, '%d.%m.%Y') AS uutispvm FROM uutisetID";

    $data = $yhteys->query($kysely);

    $JSON = '{"uutinen":[';
    $laskuri = 0;
    $riveja = $data->rowCount();
    while($rivi = $data->fetch(PDO::FETCH_ASSOC)){
        $laskuri++;
        $uutinen = str_replace(PHP_EOL, '<br>', $rivi['uutinen']);
        $JSON .= '{"Id":"' . $rivi['uutisetID'] . '","Otsikko":"' . $rivi['otsikko'] . '","Uutinen":"' . $uutinen . '","Uutispvm":"' . $rivi['uutispvm'] . '"}';
        if($laskuri<$riveja) $JSON.=",";

    }

    $JSON.=']}';
    $yhteys = null;

    $handler = fopen("uutiset.json", "w"); 
    fwrite($handler, $JSON);
    fclose($handler);
?>
