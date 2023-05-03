<?php

require "config.php";

if(isset($_POST['talleta'])){
    $historia=$_POST['historia'];
    $historiaid=$_POST['Id'];

    $komento="UPDATE historiaid SET historia=:historia WHERE historiaid=:Id";


    $muokkaa = $yhteys->prepare($komento);

    $muokkaa->bindValue(':historia', $historia, PDO::PARAM_STR);
    $muokkaa->bindValue(':Id', $historiaid, PDO::PARAM_INT); 
    

    if ($muokkaa->execute()) {

    }

    echo "SQL: " . $komento . "<br>";
    echo "historia: " . $historia . "<br>";
    echo "ID: " . $uutisetid . "<br>";

}
header("location:uutiset.php");
?>
