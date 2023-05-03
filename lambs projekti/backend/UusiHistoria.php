<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Historia</title>
    </head>
    <body>
     <div class="container">
        <h1>Uusi historia</h1>
        <a href="historia.php">Takaisin listaan</a>
        <h3>Lisää historia</h3>
        <table class="table-bordered">
            <form action="lisaaHistoria.php" method="POST">
                <tr>
                    <td>Historia</td>
                    <td><input type="text" name="historia" required></td>
                </tr>
                
                    <td></td>
                    <td><button name="talleta" type="submit" class="btn btn-primary">Talleta</button></td>
                </tr>
            </form>
        </table>
     </div>
    </body>
</html>