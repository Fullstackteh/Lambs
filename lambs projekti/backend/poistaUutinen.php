<?php
    require "connect.php";

    if(isset($_GET['Id'])){
        $uutisetid = $_GET['Id'];
        $kysely = "DELETE FROM uutisetID WHERE uutisetID=:Id";
        $poista = $yhteys->prepare($kysely);
        $poista->bindvalue('Id', $uutisetid, PDO::PARAM_STR);
        $poista->execute();
    }
    header("location: index.php")
?>