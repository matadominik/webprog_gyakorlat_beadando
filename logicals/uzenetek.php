<?php
$uzenetek = [];
$uzenetek_hiba = null;

// csak bejelentkezve látható
if (!isset($_SESSION['login'])) {
    $uzenetek_hiba = 'Az üzenetek megtekintéséhez be kell jelentkezni.';
    return;
}

try {
    if ($_SERVER['HTTP_HOST'] === 'localhost') {
        $dbh = new PDO(
            'mysql:host=localhost;dbname=gyakorlat7',
            'root',
            '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
    } else {
        $dbh = new PDO(
            'mysql:host=localhost;dbname=adatb1_b223va',
            'adatb1_b223va',
            'zs64GuN?6',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
    }

    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
// Üzenetek lekérése fordított időrendben, felhasználó nevével [3][25][32]
    $sql = "SELECT k.id,
                   k.nev,
                   k.email,
                   k.targy,
                   k.uzenet,
                   k.kuldes_ideje,
                   k.felhasznalo_id,
                   f.csaladi_nev,
                   f.uto_nev
            FROM kapcsolat_uzenetek k
            LEFT JOIN felhasznalok f ON k.felhasznalo_id = f.id
            ORDER BY k.kuldes_ideje DESC";

    $sth = $dbh->prepare($sql);
    $sth->execute();
    $uzenetek = $sth->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    $uzenetek_hiba = 'Hiba az üzenetek lekérdezésekor: ' . $e->getMessage();
}
