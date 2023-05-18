<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Käyttäjätiedot</title>
    </head>
    <body>
       
     <div class="container">
        <h1>Käyttäjätiedot</h1>
        <a href="index.php">Takaisin listaan</a>
        <h3>Muokkaa käyttäjätietoja</h3>
        <table class="table-bordered">
            <form action="muokattuSalasana.php" method="POST">



                <tr>
                    <td>Käyttäjätunnus</td>
                    
                    <td><input name="kayttajatunnus"  required></textarea></td>
                    <td>Salasana</td>
                    <td><input name="salasana" type="password" required></td>
                    <td>Uusi salasana</td>
                    <td><input name="uusisalasana" type="password" required></td>
                    <td>Uusi salasana uudelleen</td>
                    <td><input name="uusisalasana_uudelleen" type="password" required></td>



                </tr>

               


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

