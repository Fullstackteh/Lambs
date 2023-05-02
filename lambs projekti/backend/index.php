<?php 

require "includes/header.php";
require "config.php";

if(isset($_SESSION['kayttajatunnus'])){
    header("location: edit.php");
}

if(isset($_POST['submit'])){
    if($_POST['kayttajatunnus'] == 'Admin' && $_POST['password'] == '123123'){
        $_SESSION['kayttajatunnus'] = 'Admin';
        header("location: edit.php");
        exit;
    } else {
        $kayttajatunnus = $_POST['kayttajatunnus'];
        $salasana = $_POST['password'];
        $komento = "SELECT * FROM user WHERE kayttajatunnus = '$kayttajatunnus'";
        $kirjaudu = $yhteys->prepare($komento);
        $kirjaudu->execute();
        $data = $kirjaudu->fetch(PDO::FETCH_ASSOC);
        
        if($kirjaudu->rowCount() == 1){
            if(password_verify($salasana, $data['salasana'])){
                $_SESSION['kayttajatunnus'] = $data['kayttajatunnus'];
                header("location: edit.php");
                exit;
            } else {
                echo "Käyttäjätunnus tai salasana on väärin";
            }
        } else {
            echo "Käyttäjätunnus tai salasana on väärin";
        }
    }
}
?>

<main class="form-signin w-50 m-auto">
    <form method="POST">
        <h1 class="h3 mt-5 fw-normal text-center">Lambs Kirjautuminen</h1>

        <div class="form-floating">
            <input name="kayttajatunnus" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Kayttajatunnus</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Salasana</label>
        </div>

        <button name="submit" class="w-100 btn btn-lg btn-dark" type="submit">Kirjaudu</button>
    </form>
</main>

<?php require "includes/footer.php"; ?>
