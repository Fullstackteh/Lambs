<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<div class="row">
  <div class="col">
    <a href="uutiset.php" class="btn btn-outline-dark m-1">Uutiset</a>
    <a href="keikkakalenteri.php" class="btn btn-outline-dark m-1">Keikat</a>
    <a href="historia.php" class="btn btn-outline-dark m-1">Historia</a>
    <a href="kuvat.php" class="btn btn-outline-dark m-1">Kuvat</a>
    <a href="muokkaaSalasana.php" class="btn btn-outline-dark m-1">Käyttäjätiedot</a>
  </div>
</div>

<?php


// Check for success or error message
if (isset($_SESSION['success_message'])) {
    echo $_SESSION['success_message'];
    unset($_SESSION['success_message']); // Remove the message from the session
} elseif (isset($_SESSION['error_message'])) {
    echo $_SESSION['error_message'];
    unset($_SESSION['error_message']); // Remove the message from the session
}

// Rest of your index.php code
?>
