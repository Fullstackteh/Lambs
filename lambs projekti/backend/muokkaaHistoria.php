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
        <h1>Historia</h1>
        <a href="historia.php">Takaisin listaan</a>
        <h3>Muokkaa historiaa</h3>
        <table class="table-bordered">
            <form action="muokattuHistoria.php" method="POST">
                <tr>
                    <td>Otsikko</td>
                    <td><input type="text" name="historia" required></td>
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

