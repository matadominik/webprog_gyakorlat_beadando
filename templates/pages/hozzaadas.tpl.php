<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="stylesheet" href="./styles/stilusCRUD.css" type="text/css">
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Hozzáadás</h1>
            <form method="POST" action="muvelet.php">
                <input type="text" name="nev" placeholder="Név" required>
                <input type="text" name="varos" placeholder="Város" required>

                <div class="gomb-doboz">
                    <button type="submit" class="gomb" name="hozzaadas">Hozzáadás</button>
                    <a href="crud" class="gomb">Vissza</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>