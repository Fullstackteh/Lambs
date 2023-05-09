<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$target_dir = "C:/xampp/htdocs/lambsprojekti/backend/kuvat/";
$valid_extensions = array("jpg", "jpeg", "png", "gif");

if (isset($_POST["submit"])) {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        if (!in_array($imageFileType, $valid_extensions)) {
            echo "Ainoastaan JPG, JPEG, PNG, & GIF tiedostoja voi ladata sivuille.";
        } elseif ($_FILES["fileToUpload"]["size"] > 10000000) {
            echo "Kuva on liian suuri.";
        } elseif (file_exists($target_file)) {
            echo "Kuva on jo olemassa.";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "Kuva ". basename($_FILES["fileToUpload"]["name"]). " on ladattu onnistuneesti.";
            } else {
                echo "Kuvan lataamisessa tapahtui virhe.";
            }
        }
    } else {
        echo "Tiedosto ei ole kuva.";
    }
}

if (isset($_POST["delete"])) {
    $filename = $_POST["filename"];
    $file = $target_dir . $filename;
    if (file_exists($file)) {
        unlink($file);
        echo "Kuva $filename on poistettu.";
    } else {
        echo "Tiedostoa ei ole.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lisää kuva</title>
</head>
<body>
    <h2>Lisää kuva</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        Valitse kuva:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type='submit' value='Lataa kuva' name='submit' class="btn btn-primary">
    </form>

    <h2>Kuvat</h2>
    <?php
    $files = glob($target_dir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
    foreach ($files as $file) {
        $filename = basename($file);
        echo "<div>";
        echo "<img src='kuvat/$filename' width='200' height='200'>";
        echo "<form action='' method='POST'>";
        echo "<input type='hidden' name='filename' value='$filename'>";
        echo "<input type='submit' value='Poista' name='delete' class='btn btn-primary'>";
        echo "</form>";
        echo "</div>";
    }
    ?>
</body>
</html>