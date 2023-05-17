<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <title>Uutiset</title>
    </head>
<body>
   <div class="container">
        <br>
      <h1>Historia</h1>
      <h3>Kaikki historia</h3>
      <p><a href="UusiHistoria.php" class="btn btn-success">Lisää historia</a></p>


      <table class="table table-striped">
        <thead>
          <tr>
             <th>Historia</th>
             <th>ID</th>
             <th></th>
             <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            include('historialistaus.php');
            $historiat = json_decode($JSON, true);

            if(count($historiat) != 0){
              foreach ($historiat as $key) {
                foreach($key as $historia){
                  ?>
                  <tr>
                    <td> <?php echo $historia['historia']; ?> </td>
                    <td> <?php echo $historia['Id']; ?> </td>
                    

                    <td> <?php echo '<a href="muokkaaHistoria.php?Id='.$historia['Id'].'" class="btn btn-dark">Muokkaa</a>'; ?></td>
                    <td> <?php echo '<a href="poistaHistoria.php?Id='.$historia['Id'].'" class="btn btn-danger">Poista</a>'; ?></td>
                  </tr>
                  <?php
                }
              }
            }
          ?>
        </tbody>
      </table>

