<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Uutiset</title>
    </head>
    <body>
       
     <div class="container">
        <h1>Uutiset</h1>
        <a href="index.php">Takaisin listaan</a>
        <h3>Muokkaa uutista</h3>
        <table class="table-bordered">
            <form action="muokattuUutinen.php" method="POST">

            <?php
                    $kysely = $yhteys->prepare("SELECT * FROM uutisetid WHERE uutisetID= :Id");
                    $kysely->bindValue(":Id", $_GET['Id']);
                    $kysely->execute();
                    $rivi = $kysely->fetch(PDO::FETCH_ASSOC);
                ?>
                <tr>
                    <td>Otsikko</td>
                    <td><input type="text" name="otsikko" required value="<?php echo ($rivi['otsikko']); ?>"></td>
                </tr>
                <tr>
                <td>Uutinen</td>
                <td><textarea style="width: 1000px; height: 500px;" name="uutinen"><?php echo $rivi['uutinen']; ?></textarea></td>

                </tr>
               
    <input type="hidden" name="Id" value="<?php echo $_GET['Id']; ?>"></td>

</tr>


                <tr>
                    <td></td>
                    <td><button name="talleta" type="submit" class="btn btn-primary">Talleta</button></td>
                </tr>
            </form>
        </table>
     </div>
    </body>
</html>