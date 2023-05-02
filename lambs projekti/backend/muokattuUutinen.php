<?php

require "connect.php";

if(isset($_POST['talleta'])){
    $otsikko=$_POST['otsikko'];
    $uutinen=$_POST['uutinen'];
    $uutisetid=$_POST['Id'];

    $komento="UPDATE uutisetID SET otsikko=:otsikko, uutinen=:uutinen WHERE uutisetID=:Id";


    $muokkaa = $yhteys->prepare($komento);

    $muokkaa->bindValue(':otsikko', $otsikko, PDO::PARAM_STR);
    $muokkaa->bindValue(':uutinen', $uutinen, PDO::PARAM_STR);
    $muokkaa->bindValue(':Id', $uutisetid, PDO::PARAM_INT); 
    

    if ($muokkaa->execute()) {

    }

    echo "SQL: " . $komento . "<br>";
    echo "otsikko: " . $otsikko . "<br>";
    echo "uutinen: " . $uutinen . "<br>";
    echo "ID: " . $uutisetid . "<br>";

}
//header("location:index.php");
?>
