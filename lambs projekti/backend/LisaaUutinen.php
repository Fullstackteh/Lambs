<?php

require "config.php";

if(isset($_POST['talleta'])){
    $otsikko = $_POST['otsikko'];
    $teksti = $_POST['uutinen'];
    $uutispvm = date('Y-m-d'); 

    $komento = "INSERT INTO uutisetID(otsikko, uutinen, uutispvm) VALUES(:otsikko, :uutinen, :uutispvm)";

    $lisaa = $yhteys->prepare($komento);
    $lisaa->bindValue(':otsikko', $otsikko, PDO::PARAM_STR);
    $lisaa->bindValue(':uutinen', $teksti, PDO::PARAM_STR);
    $lisaa->bindValue(':uutispvm', $uutispvm, PDO::PARAM_STR);
    $lisaa->execute();
}

header("location:uutiset.php");

?>