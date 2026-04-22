<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="stylesheet" href="./styles/stilusCRUD.css" type="text/css">
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Hozzáadás</h1>
            <form method="POST" action="muvelet">
                <input type="hidden" name="action" value="hozzaadas">

                <div class="input-container">
                    <input type="text" id="nev" name="nev" required>
                    <label for="nev">Név</label>
                </div>
                <div class="input-container">
                    <input type="text" id="varos" name="varos" required>
                    <label for="varos">Város</label>
                </div>

                <div class="gomb-doboz">
                    <button type="submit" class="gomb">Hozzáadás</button>
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