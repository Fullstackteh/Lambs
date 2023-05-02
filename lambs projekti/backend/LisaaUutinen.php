<?php

require "connect.php";

if(isset($_POST['talleta'])){
    $otsikko=$_POST['otsikko'];
    $teksti=$_POST['uutinen'];

    $komento="INSERT INTO uutisetID(otsikko, uutinen) VALUES(:otsikko, :uutinen)";


    $lisaa = $yhteys->prepare($komento);
    $lisaa->bindValue(':otsikko', $otsikko, PDO::PARAM_STR);
    $lisaa->bindValue(':uutinen', $teksti, PDO::PARAM_STR);
    $lisaa->execute();
}
header("location:index.php");
?>