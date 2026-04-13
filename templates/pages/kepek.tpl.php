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
                printf("<img src='images/feltoltott/%s'>",
                    rawurldecode(basename($k))
                    );
            }
        ?>
    </div>

    <div class="focimek">
        <p>Tölts fel képet te is</p>
    </div>
</body>
</html>

