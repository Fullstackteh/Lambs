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
      <h1>Uutiset</h1>
      <h3>Kaikki uutiset</h3>
      <p><a href="UusiHistoria.php" class="btn btn-primary">Lisää uutinen</a></p>


      <table class="table table-striped">
        <thead>
          <tr>
             <th>Otsikko</th>
             <th>Uutinen</th>
             <th>ID</th>
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
                    

                    <td> <?php echo '<a href="muokkaaHistoria.php?Id='.$historia['Id'].'" class="btn btn-primary">Muokkaa</a>'; ?></td>
                    <td> <?php echo '<a href="poistaHistoria.php?Id='.$historia['Id'].'" class="btn btn-primary">Poista</a>'; ?></td>
                  </tr>
                  <?php
                }
              }
            }
          ?>
        </tbody>
      </table>


