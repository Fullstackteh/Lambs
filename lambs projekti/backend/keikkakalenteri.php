<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <title>Keikat</title>
    </head>
<body>
   <div class="container">
        <br>
      <h1>Keikat</h1>
      <h3>Kaikki keikat</h3>
      <p><a href="uusikeikka.php" class="btn btn-success">Lisää keikka</a></p>


      <table class="table table-striped">
        <thead>
          <tr>
             <th>Paikkakunta</th>
             <th>Paikka</th>
             <th>Päivämäärä</th>
             <th>Kellonaika</th>
             <th>ID</th>
             <th></th>
             <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            include('keikkalistaus.php');
            $keikat = json_decode($JSON, true);

            if(count($keikat) != 0){
              foreach ($keikat as $key) {
                foreach($key as $keikka){
                  ?>
                  <tr>
                    <td> <?php echo $keikka['Paikkakunta']; ?> </td>
                    <td> <?php echo $keikka['Paikka']; ?> </td>
                    <td> <?php echo $keikka['Pvm']; ?> </td>
                    <td> <?php echo $keikka['Klo']; ?> </td>
                    <td> <?php echo $keikka['Id']; ?> </td>

                    <td> <?php echo '<a href="muokkaakeikka.php?Id='.$keikka['Id'].'" class="btn btn-dark">Muokkaa</a>'; ?></td>
                    <td> <?php echo '<a href="poistakeikka.php?Id='.$keikka['Id'].'" class="btn btn-danger">Poista</a>'; ?></td>
                  </tr>
                  <?php
                }
              }
            }
          ?>
        </tbody>
      </table>


