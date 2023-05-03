<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Keikkakalenteri</title>
    </head>
    <body>
       
     <div class="container">
        <h1>Keikat</h1>
        <a href="keikkakalenteri.php">Takaisin listaan</a>
        <h3>Muokkaa keikkoja</h3>
        <table class="table-bordered">
            <form action="muokattukeikka.php" method="POST">

            <?php
                    $kysely = $yhteys->prepare("SELECT * FROM KeikkakalenteriID WHERE KeikkakalenteriID= :Id");
                    $kysely->bindValue(":Id", $_GET['Id']);
                    $kysely->execute();
                    $rivi = $kysely->fetch(PDO::FETCH_ASSOC);
                ?>

                <tr>
                    <td>Paikkakunta</td>
                    <td><input type="text" name="paikkakunta" required value="<?php echo ($rivi['paikkakunta']); ?>"></td>
                </tr>
                <tr>
                    <td>Paikka</td>
                    <td><input type="text" name="paikka" value="<?php echo ($rivi['paikka']); ?>"></td>
                </tr>
                <tr>
                    <td>Päivämäärä</td>
                    <td><input type="date" name="paivamaara" required value="<?php echo ($rivi['paivamaara']); ?>"></td>
                </tr>
                <tr>
                    <td>Kellonaika</td>
                    <td><input type="time" name="kellonaika" value="<?php echo ($rivi['kellonaika']); ?>"></td>
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