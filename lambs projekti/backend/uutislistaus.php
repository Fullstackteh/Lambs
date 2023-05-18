<?php
    // Sallitaan pääsy tälle tiedostolle kaikista lähteistä
    header("Access-Control-Allow-Origin: *");

    // Sisällytetään konfiguraatiotiedosto
    include('config.php');

    // Suoritetaan tietokantakysely
    $kysely = "SELECT uutisetID, otsikko, uutinen, DATE_FORMAT(uutispvm, '%d.%m.%Y') AS uutispvm FROM uutisetID";
    $data = $yhteys->query($kysely);

    // Alustetaan JSON-muuttuja
    $JSON = '{"uutinen":[';

    // Laskurimuuttuja ja rivien määrä
    $laskuri = 0;
    $riveja = $data->rowCount();

    // Käydään läpi tietokantatulokset ja lisätään ne JSON-muuttujaan
    while ($rivi = $data->fetch(PDO::FETCH_ASSOC)) {
        $laskuri++;
        
        // Vaihdetaan rivinvaihdot <br>-elementeiksi
        $uutinen = str_replace(PHP_EOL, '<br>', $rivi['uutinen']);

        // Lisätään uutisen tiedot JSON-muuttujaan
        $JSON .= '{"Id":"' . $rivi['uutisetID'] . '","Otsikko":"' . $rivi['otsikko'] . '","Uutinen":"' . $uutinen . '","Uutispvm":"' . $rivi['uutispvm'] . '"}';

        // Lisätään pilkku, jos ei ole viimeinen uutinen
        if ($laskuri < $riveja) {
            $JSON .= ",";
        }
    }

    // Viimeistellään JSON-muuttuja
    $JSON .= ']}';

    // Suljetaan tietokantayhteys
    $yhteys = null;

    // Avataan tiedosto "uutiset.json" kirjoitusta varten
    $handler = fopen("uutiset.json", "w"); 

    // Kirjoitetaan JSON-muuttuja tiedostoon
    fwrite($handler, $JSON);

    // Suljetaan tiedosto
    fclose($handler);
?>
