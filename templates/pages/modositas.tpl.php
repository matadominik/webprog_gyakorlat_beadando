<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="stylesheet" href="./styles/stilusCRUD.css" type="text/css">
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Módosítás</h1>
            <form method="POST" action="muvelet">
                <input type="hidden" name="action" value="modositas">
                <input type="hidden" name="az" value="<?= htmlspecialchars($modositando['az'] ?? '') ?>">
                <input type="text" name="nev" placeholder="Név" required value="<?= htmlspecialchars($modositando['nev'] ?? '') ?>">
                <input type="text" name="varos" placeholder="Város" required value="<?= htmlspecialchars($modositando['varos'] ?? '') ?>">

                <?php if (isset($modositas_hiba)) : ?>
                    <p class="hiba"><?= htmlspecialchars($modositas_hiba) ?></p>
                <?php endif; ?>

                <div class="gomb-doboz">
                    <button type="submit" class="gomb">Módosítás</button>
                    <a href="crud" class="gomb">Vissza</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>