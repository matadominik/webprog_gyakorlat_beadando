<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="stylesheet" href="./styles/stilusCRUD.css" type="text/css">
</head>
<body>

    <div class="container">
        <h1>Tulajdonos adatok</h1>
        <?php if (isset($_SESSION['login'])) : ?>            
            <a href="hozzaadas">Hozzáadás</a>
        <?php endif; ?>

        <table>
            <tr>
                <th>Az.</th>
                <th>Név</th>
                <th>Város</th>
                <?php if (isset($_SESSION['login'])) : ?>                    
                    <th>Műveletek</th>
                <?php endif; ?>
            </tr>

            <tr>
                <th>1</th>
                <th>Balatonjárók Zrt.</th>
                <th>Siófok</th>
                <?php if (isset($_SESSION['login'])) : ?>                    
                    <td>
                        <a href="modositas">Módosítás</a>
                        <a href="" class="gomb-eltavolitas">Eltávolítás</a>
                    </td>
                <?php endif; ?>
            </tr>
        </table>
    </div>
    
</body>
</html>