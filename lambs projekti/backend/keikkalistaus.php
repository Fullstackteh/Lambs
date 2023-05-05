<?php
    header("Access-Control-Allow-Origin: *");

    include('config.php');

    $kysely="SELECT KeikkakalenteriID, DATE_FORMAT(paivamaara, '%d.%m.%Y') AS paivamaara, paikkakunta, paikka, TIME_FORMAT(kellonaika, '%H:%i') AS kellonaika FROM KeikkakalenteriID ORDER BY paivamaara";

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

        $handler = fopen("keikat.json", "w");
        fwrite($handler, $JSON);
        fclose($handler);

?>
