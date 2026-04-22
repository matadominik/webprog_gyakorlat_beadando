<h2>Üzenetek</h2>

<?php if (isset($uzenetek_hiba)) : ?>
    <p class="hiba"><?= htmlspecialchars($uzenetek_hiba) ?></p>

<?php elseif (empty($uzenetek)) : ?>
    <p>Még nem érkezett üzenet.</p>

<?php else : ?>
    <table class="uzenetek-tabla">
        <thead>
            <tr>
                <th>Küldés ideje</th>
                <th>Üzenetküldő</th>
                <th>E‑mail</th>
                <th>Tárgy</th>
                <th>Üzenet</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($uzenetek as $u) : ?>
                <tr>
                    <td><?= htmlspecialchars($u['kuldes_ideje']) ?></td>
                    <td>
                    <?php
                        if (!empty($u['csaladi_nev']) || !empty($u['uto_nev'])) {
                        echo htmlspecialchars(trim($u['csaladi_nev'] . ' ' . $u['uto_nev']));
                        } elseif (!empty($u['nev'])) {
                        echo htmlspecialchars($u['nev']);
                        } else {
                        echo 'Vendég';
            }
                    ?>
</td>
                    <td><?= htmlspecialchars($u['email']) ?></td>
                    <td><?= htmlspecialchars($u['targy']) ?></td>
                    <td><?= nl2br(htmlspecialchars($u['uzenet'])) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>