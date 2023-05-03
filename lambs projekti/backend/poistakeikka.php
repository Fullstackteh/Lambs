<?php
    require "config.php";

    if(isset($_GET['Id'])){
        $keikkakalenteriid = $_GET['Id'];
        $kysely = "DELETE FROM KeikkakalenteriID WHERE KeikkakalenteriID=:Id";
        $poista = $yhteys->prepare($kysely);
        $poista->bindvalue('Id', $keikkakalenteriid, PDO::PARAM_STR);
        $poista->execute();
    }
    header("location: keikkakalenteri.php")
?>