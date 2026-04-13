<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="stylesheet" href="./styles/stilusKepek.css" type="text/css">
</head>
<body>
    <div class="focimek">
        <p>Galéria</p>
    </div>

    <div class="galeria">
        <?php
    
            // képek a galériából
            $mappa = __DIR__ . '/../../images/feltoltott/';
            $kepek = glob(
                "$mappa*.{jpg,jpeg,gif,png,bmp,webp,avif}",
                GLOB_BRACE
            );
    
            // képek megjelenítése
            foreach ($kepek as $k) {
                printf("
                <div class='kep'>
                <img src='images/feltoltott/%s'>
                </div>",
                    rawurldecode(basename($k))
                );
            }
        ?>
    </div>

    <div class="focimek">
        <p>Tölts fel képet te is</p>
    </div>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image" />
        <button type="submit" name="submit">Feltöltés</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $fajlnev = $_FILES['image']['name'];
        $tempnev = $_FILES['image']['tmp_name'];
        $mappa = 'images/feltoltott/'.$fajlnev;

        if(move_uploaded_file($tempnev, $mappa)) {

        }
    }
?>