<?php require "includes/header.php"; ?>

<?php require "config.php"; ?>

<?php
if(isset($_SESSION['kaytttajatunnus'])){
  header("location: index.php");
}

  if(isset($_POST['submit'])){
    if($_POST['kaytttajatunnus'] == '' OR $_POST['password'] == ''){
      echo "Täytä kaikki tarvittavat tiedot!";
    } else {
      $sposti = $_POST['kaytttajatunnus'];
      $salasana = $_POST['password'];

      $komento = "SELECT * FROM user WHERE kayttajatunnus = '$kaytttajatunnus'";
      $kirjaudu = $yhteys->query($komento);
      $kirjaudu->execute();
      $data = $kirjaudu->fetch(PDO::FETCH_ASSOC);
      if($kirjaudu->rowCount() > 0){
        if(password_verify($salasana, $data['salasana'])){
          //echo "Olet kirjautunut";
          $_SESSION['kaytttajatunnus'] = $data['kaytttajatunnus'];
          header("location: index.php");

        } else {
          echo "kaytttajatunnus tai/ja salasana on väärin";
        }
      } else {
        echo "kaytttajatunnus tai/ja salasana on väärin";
      } 
    }
  }
?>

<main class="form-signin w-50 m-auto">
  <form method="POST" action="login.php">
    <!-- <img class="mb-4 text-center" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mt-5 fw-normal text-center">Lambs Kirjatuminen</h1>

    <div class="form-floating">
      <input name="kaytttajatunnus" type="kaytttajatunnus" class="form-control" id="floatingInput" placeholder="name@example.com">
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
<?php require "includes/footer.php"; ?>
