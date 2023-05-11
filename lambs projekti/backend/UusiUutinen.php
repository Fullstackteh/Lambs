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
        <h1>Uusi uutinen</h1>
        <a href="index.php">Takaisin listaan</a>
        <h3>Lisää uutinen</h3>
        <table class="table-bordered">
            <form action="uutiset.php" method="POST">
                <tr>
                    <td>Otsikko</td>
                    <td><input type="text" name="otsikko" required></td>
                </tr>
                <tr>
                    <td>Teksti</td>
                    <td><textarea name="uutinen" style="width: 1000px; height: 500px;"></textarea></td>

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
