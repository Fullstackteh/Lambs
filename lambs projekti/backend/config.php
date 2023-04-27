<?php
try{
$palvelin = "localhost";
$tietokanta = "lambs";
$tunnus = "root";
$salasana = "";

$yhteys = new PDO ("mysql:host=$palvelin; dbname=$tietokanta", $tunnus, $salasana);
$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    print "<p>Tietokantayhteyden avaaminen epäonnistui.</p>" . $e->getMessage();
}



//if($yhteys == true){
    //echo "Yhteys toimii";
//}else{
    //echo "Yhteys ei toimi";
//}

?>