<?php
    // Sallitaan pääsy tälle tiedostolle kaikista lähteistä
    header("Access-Control-Allow-Origin: *");

    // Sisällytetään konfiguraatiotiedosto
    include('config.php');

    // Suoritetaan tietokantakysely
    $kysely = "SELECT KeikkakalenteriID, DATE_FORMAT(paivamaara, '%d.%m.%Y') AS paivamaara, paikkakunta, paikka, TIME_FORMAT(kellonaika, '%H:%i') AS kellonaika FROM KeikkakalenteriID ORDER BY paivamaara";
    $data = $yhteys->query($kysely);

    // Alustetaan JSON-muuttuja
    $JSON = '{"keikka":[';

    // Laskurimuuttuja ja rivien määrä
    $laskuri = 0;
    $riveja = $data->rowCount();

    // Käydään läpi tietokantatulokset ja lisätään ne JSON-muuttujaan
    while ($rivi = $data->fetch(PDO::FETCH_ASSOC)) {
        $laskuri++;
        
        // Lisätään keikan tiedot JSON-muuttujaan
        $JSON .= '{"Id":"' . $rivi['KeikkakalenteriID'] . '","Pvm":"' . $rivi['paivamaara'] . '","Klo":"' . $rivi['kellonaika'] . '","Paikkakunta":"' . $rivi['paikkakunta'] . '","Paikka":"' . $rivi['paikka'] . '"}';

        // Lisätään pilkku, jos ei ole viimeinen keikka
        if ($laskuri < $riveja) {
            $JSON .= ",";
        }
    }

    // Viimeistellään JSON-muuttuja
    $JSON .= ']}';

    // Suljetaan tietokantayhteys
    $yhteys = null;

    // Avataan tiedosto "keikat.json" kirjoitusta varten
    $handler = fopen("keikat.json", "w"); 

    // Kirjoitetaan JSON-muuttuja tiedostoon
    fwrite($handler, $JSON);

    // Suljetaan tiedosto
    fclose($handler);
?>
