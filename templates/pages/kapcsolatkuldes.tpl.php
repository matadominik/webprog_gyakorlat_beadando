<h2>Kapcsolat – üzenet elküldve</h2>

<?php if (!empty($kapcs_hibak)) : ?>
    <h3>Hiba történt az űrlap feldolgozásakor:</h3>
    <ul>
        <?php foreach ($kapcs_hibak as $hiba) : ?>
            <li><?= htmlspecialchars($hiba) ?></li>
        <?php endforeach; ?>
    </ul>
    <p><a href="kapcsolat">Vissza a kapcsolat űrlaphoz</a></p>

<?php elseif (!empty($kapcs_adatok)) : ?>
    <p>Köszönjük, az üzenetedet rögzítettük az adatbázisban.</p>
    <h3>Beküldött adatok:</h3>
    <ul>
        <li><strong>Név:</strong> <?= htmlspecialchars($kapcs_adatok['nev']) ?></li>
        <li><strong>E‑mail:</strong> <?= htmlspecialchars($kapcs_adatok['email']) ?></li>
        <li><strong>Tárgy:</strong> <?= htmlspecialchars($kapcs_adatok['targy']) ?></li>
        <li><strong>Üzenet:</strong><br>
            <?= nl2br(htmlspecialchars($kapcs_adatok['uzenet'])) ?>
        </li>
    </ul>
    <p><a href="kapcsolat">Új üzenet küldése</a></p>

<?php else : ?>
    <p>Nem érkeztek adatok.</p>
    <p><a href="kapcsolat">Vissza a kapcsolat űrlaphoz</a></p>
<?php endif; ?>


