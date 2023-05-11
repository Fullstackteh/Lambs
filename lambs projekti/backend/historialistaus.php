<?php
    header("Access-Control-Allow-Origin: *");

    include('config.php');

    $kysely="SELECT historiaid, historia FROM historiaid";
    $data = $yhteys->query($kysely);

    $JSON = '{"historia":[';
    $laskuri = 0;
    $riveja = $data->rowCount();
    while($rivi = $data->fetch(PDO::FETCH_ASSOC)){
        $laskuri++;
        $historia = str_replace(PHP_EOL, '<br>', $rivi['historia']);
        $JSON .= '{"Id":"' . $rivi['historiaid'] . '","historia":"' . $historia . '"}';

        if($laskuri<$riveja) $JSON.=",";

    }

        $JSON.=']}';
        $yhteys = null;

        $handler = fopen("historia.json", "w");
        fwrite($handler, $JSON);
        fclose($handler);

?>