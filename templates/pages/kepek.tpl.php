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
                $filename = rawurldecode(basename($k));
                printf(
                    "<a class='kep' href='images/feltoltott/%s' data-full='images/feltoltott/%s' target='_blank' rel='noreferrer'>\n" .
                    "    <img src='images/feltoltott/%s' alt='Galéria kép'>\n" .
                    "</a>",
                    $filename,
                    $filename,
                    $filename
                );
            }
        ?>
    </div>

    <div class="lightbox" id="lightbox">
        <div class="lightbox-content">
            <button class="lightbox-close" id="lightboxClose" aria-label="Bezárás">×</button>
            <img id="lightboxImage" src="" alt="Nagyított kép">
        </div>
    </div>

    <?php if (isset($_SESSION['login'])) : ?>
        <div class="focimek">
            <p>Tölts fel képet te is</p>
        </div>

        <div class="gombCsoport">
            <form method="POST" enctype="multipart/form-data">
                <label class="custom-file-upload" for="imageInput">
                    <input id="imageInput" type="file" name="image">
                    Kép kiválasztása
                </label>

                <button type="submit" name="submit">Feltöltés</button>
            </form>
            
            <br><label id="selectedFiles">Nincs kiválasztott fájl</label>
        </div>
    <?php endif; ?>

    <script>
        const fileInput = document.getElementById('imageInput');
        const selectedFilesLabel = document.getElementById('selectedFiles');
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightboxImage');
        const lightboxClose = document.getElementById('lightboxClose');

        fileInput.addEventListener('change', () => {
            const files = Array.from(fileInput.files);
            if (files.length === 0) {
                selectedFilesLabel.textContent = 'Nincs kiválasztott fájl';
                return;
            }

            selectedFilesLabel.textContent = files
                .map(file => file.name)
                .join(', ');
        });

        document.querySelectorAll('.kep').forEach(item => {
            item.addEventListener('click', event => {
                event.preventDefault();
                const fullSrc = item.getAttribute('data-full');
                lightboxImage.src = fullSrc;
                lightbox.classList.add('open');
            });
        });

        lightboxClose.addEventListener('click', () => {
            lightbox.classList.remove('open');
        });

        lightbox.addEventListener('click', event => {
            if (event.target === lightbox) {
                lightbox.classList.remove('open');
            }
        });
    </script>
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