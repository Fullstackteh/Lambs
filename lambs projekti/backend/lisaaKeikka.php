<?php

require "config.php";

if(isset($_POST['talleta'])){
    $paikkakunta=$_POST['paikkakunta'];
    $paikka=$_POST['paikka'];
    $pvm=$_POST['paivamaara'];
    $klo=$_POST['kellonaika'];

    $komento="INSERT INTO KeikkakalenteriID(paivamaara, paikkakunta, paikka, kellonaika) VALUES(:paivamaara, :paikkakunta, :paikka, :kellonaika)";


    $lisaa = $yhteys->prepare($komento);
    $lisaa->bindValue(':paikkakunta', $paikkakunta, PDO::PARAM_STR);
    $lisaa->bindValue(':paikka', $paikka, PDO::PARAM_STR);
    $lisaa->bindValue(':paivamaara', $pvm, PDO::PARAM_STR);
    $lisaa->bindValue(':kellonaika', $klo, PDO::PARAM_STR);
    $lisaa->execute();
}
header("location:keikkakalenteri.php");
?>