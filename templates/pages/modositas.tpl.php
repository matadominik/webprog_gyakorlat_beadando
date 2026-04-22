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
                <div class="input-container">
                    <input type="text" id="nev" name="nev" required value="<?= htmlspecialchars($modositando['nev'] ?? '') ?>">
                    <label for="nev">Név</label>
                </div>
                <div class="input-container">
                    <input type="text" id="varos" name="varos" required value="<?= htmlspecialchars($modositando['varos'] ?? '') ?>">
                    <label for="varos">Város</label>
                </div>

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
    <script>
        document.querySelectorAll('.input-container input').forEach(input => {
            const label = input.nextElementSibling;
            function checkValue() {
                if (input.value.trim() !== '' || input === document.activeElement) {
                    label.classList.add('floating');
                } else {
                    label.classList.remove('floating');
                }
            }
            input.addEventListener('focus', checkValue);
            input.addEventListener('blur', checkValue);
            input.addEventListener('input', checkValue);
            checkValue(); // Initial check
        });
    </script>
</body>
</html>