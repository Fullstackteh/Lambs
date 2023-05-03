<?php
    header("Access-Control-Allow-Origin: *");

    include('config.php');

    $kysely="SELECT KeikkakalenteriID, paivamaara, paikkakunta, paikka, kellonaika FROM KeikkakalenteriID";
    $data = $yhteys->query($kysely);

    $JSON = '{"keikka":[';
    $laskuri = 0;
    $riveja = $data->rowCount();
    while($rivi = $data->fetch(PDO::FETCH_ASSOC)){
        $laskuri++;
        $JSON .= '{"Id":"' . $rivi['KeikkakalenteriID'] . '","Pvm":"' . $rivi['paivamaara'] . '","Klo":"' . $rivi['kellonaika'] . '","Paikkakunta":"' . $rivi['paikkakunta'] . '","Paikka":"' . $rivi['paikka'] . '"}';

        if($laskuri<$riveja) $JSON.=",";

    }

        $JSON.=']}';
        $yhteys = null;

        $handler = fopen("data.json", "w");
        fwrite($handler, $JSON);
        fclose($handler);

?>
