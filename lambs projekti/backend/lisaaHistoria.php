<?php

require "config.php";

if(isset($_POST['talleta'])){
    $historia=$_POST['historia'];

    $komento="INSERT INTO historiaid(historia) VALUES(:historia)";


    $lisaa = $yhteys->prepare($komento);
    $lisaa->bindValue(':historia', $historia, PDO::PARAM_STR);
    $lisaa->execute();
}
header("location:historia.php");
?>