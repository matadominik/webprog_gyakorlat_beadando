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
            <?php if (isset($crud_hiba)) : ?>
                <tr>
                    <td colspan="<?= isset($_SESSION['login']) ? 4 : 3 ?>" class="hiba"><?= htmlspecialchars($crud_hiba) ?></td>
                </tr>
            <?php elseif (! empty($tulajdonosok)) : ?>
                <?php foreach ($tulajdonosok as $tulajdonos) : ?>
                    <tr>
                        <th><?= htmlspecialchars($tulajdonos['az']) ?></th>
                        <td><?= htmlspecialchars($tulajdonos['nev']) ?></td>
                        <td><?= htmlspecialchars($tulajdonos['varos']) ?></td>
                        <?php if (isset($_SESSION['login'])) : ?>
                            <td>
                                <a href="modositas?az=<?= urlencode($tulajdonos['az']) ?>">Módosítás</a>
                                <!-- <a href="" class="gomb-eltavolitas">Eltávolítás</a> -->
                                <form method="POST" action="muvelet" class="inline-form">
                                    <input type="hidden" name="action" value="torles">
                                    <input type="hidden" name="az" value="<?= htmlspecialchars($tulajdonos['az']) ?>">
                                    <button type="submit" class="gomb-eltavolitas" onclick="return confirm('Biztosan törölni szeretné ezt a tulajdonost?')">Eltávolítás</button>
                                </form>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="<?= isset($_SESSION['login']) ? 4 : 3 ?>">Nincs megjeleníthető tulajdonos az adatbázisban.</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
    
</body>
</html>