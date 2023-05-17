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
      <p><a href="UusiUutinen.php" class="btn btn-success">Lisää uutinen</a></p>


      <table class="table table-striped">
        <thead>
          <tr>
             <th>Otsikko</th>
             <th>Uutinen</th>
             <th>pvm</th>
             <th>ID</th>
             <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            include('uutislistaus.php');
            $uutiset = json_decode($JSON, true);

            if(count($uutiset) != 0){
              foreach ($uutiset as $key) {
                foreach($key as $uutinen){
                  ?>
                  <tr>
                    <td> <?php echo $uutinen['Otsikko']; ?> </td>
                    <td> <?php echo $uutinen['Uutinen']; ?> </td>
                    <td> <?php echo $uutinen['Uutispvm']; ?> </td>
                    <td> <?php echo $uutinen['Id']; ?> </td>

                    <td> <?php echo '<a href="muokkaaUutinen.php?Id='.$uutinen['Id'].'" class="btn btn-dark">Muokkaa</a>'; ?></td>
                    <td> <?php echo '<a href="poistaUutinen.php?Id='.$uutinen['Id'].'" class="btn btn-danger">Poista</a>'; ?></td>
                  </tr>
                  <?php
                }
              }
            }
          ?>
        </tbody>
      </table>


