<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Autot</title>
    </head>
    <body>
     <div class="container">
        <h1>Uusi keikka</h1>
        <a href="keikkakalenteri.php">Takaisin listaan</a>
        <h3>Lisää keikka</h3>
        <table class="table-bordered">
            <form action="lisaakeikka.php" method="POST">
            <tr>
                    <td>Paikkakunta</td>
                    <td><input type="text" name="paikkakunta" required></td>
                </tr>
                <tr>
                    <td>Paikka</td>
                    <td><input type="text" name="paikka"></td>
                </tr>
                <tr>
                    <td>Päivämäärä</td>
                    <td><input type="date" name="paivamaara" required></td>
                </tr>
                <tr>
                    <td>Kellonaika</td>
                    <td><input type="time" name="kellonaika"></td>
                </tr>
                    <td></td>
                    <td><button name="talleta" type="submit" class="btn btn-primary">Talleta</button></td>
                </tr>
            </form>
        </table>
     </div>
    </body>
</html>