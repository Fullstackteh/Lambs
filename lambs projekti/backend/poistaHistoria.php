<?php
    require "config.php";

    if(isset($_GET['Id'])){
        $historiaid = $_GET['Id'];
        $kysely = "DELETE FROM historiaid WHERE historiaid=:Id";
        $poista = $yhteys->prepare($kysely);
        $poista->bindvalue('Id', $uutisetid, PDO::PARAM_STR);
        $poista->execute();
    }
    header("location: index.php")
?>