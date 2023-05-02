<?php
    header("Access-Control-Allow-Origin: *");

    include('config.php');

    $kysely="SELECT uutisetID, otsikko, uutinen FROM uutisetID";
    $data = $yhteys->query($kysely);

    $JSON = '{"uutinen":[';
    $laskuri = 0;
    $riveja = $data->rowCount();
    while($rivi = $data->fetch(PDO::FETCH_ASSOC)){
        $laskuri++;
        $JSON .= '{"Id":"' . $rivi['uutisetID'] . '","Otsikko":"' . $rivi['otsikko'] . '","Uutinen":"' . $rivi['uutinen'] . '"}';

        if($laskuri<$riveja) $JSON.=",";

    }

        $JSON.=']}';
        $yhteys = null;

        $handler = fopen("data.json", "w");
        fwrite($handler, $JSON);
        fclose($handler);

?>
