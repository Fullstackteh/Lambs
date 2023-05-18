<?php
require "config.php";

session_start(); // Start the session

if (isset($_POST['talleta'])) {
    $kayttajatunnus = $_POST['kayttajatunnus'];
    $salasana = $_POST['salasana'];
    $uusisalasana = $_POST['uusisalasana'];
    $uusisalasana_uudelleen = $_POST['uusisalasana_uudelleen'];

    if ($uusisalasana === $uusisalasana_uudelleen) {
        $komento = "UPDATE user SET salasana=:uusisalasana WHERE kayttajatunnus=:kayttajatunnus AND salasana=:salasana";

        $muokkaa = $yhteys->prepare($komento);
        $muokkaa->bindValue(':uusisalasana', $uusisalasana, PDO::PARAM_STR);
        $muokkaa->bindValue(':kayttajatunnus', $kayttajatunnus, PDO::PARAM_STR);
        $muokkaa->bindValue(':salasana', $salasana, PDO::PARAM_STR);

        if ($muokkaa->execute()) {
            $_SESSION['success_message'] = "Salasana päivitetty onnistuneesti!";
        } else {
            $_SESSION['error_message'] = "Virhe salasanaa päivittäessä!";
        }
    } else {
        $_SESSION['error_message'] = "Salasanat eivät täsmänneet!";
    }
}

header("Location: index.php");
?>
