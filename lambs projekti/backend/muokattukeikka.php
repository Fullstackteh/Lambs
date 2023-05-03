<?php

require "connect.php";

if(isset($_POST['talleta'])){
    $paikkakunta=$_POST['paikkakunta'];
    $paikka=$_POST['paikka'];
    $paivamaara=$_POST['paivamaara'];
    $kellonaika=$_POST['kellonaika'];
    $keikkakalenteriid=$_POST['Id'];

    $komento="UPDATE KeikkakalenteriID SET paikkakunta=:paikkakunta, paikka=:paikka, kellonaika=:kellonaika, paivamaara=:paivamaara WHERE KeikkakalenteriID=:Id";


    $muokkaa = $yhteys->prepare($komento);

    $muokkaa->bindValue(':paikkakunta', $paikkakunta, PDO::PARAM_STR);
    $muokkaa->bindValue(':paikka', $paikka, PDO::PARAM_STR);
    $muokkaa->bindValue(':paivamaara', $paivamaara, PDO::PARAM_STR);
    $muokkaa->bindValue(':kellonaika', $kellonaika, PDO::PARAM_STR);
    $muokkaa->bindValue(':Id', $keikkakalenteriid, PDO::PARAM_INT); 
    

    if ($muokkaa->execute()) {

    }

    echo "SQL: " . $komento . "<br>";


}
header("location:keikkakalenteri.php");
?>
