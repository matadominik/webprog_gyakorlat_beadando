<?php
$modositando = null;
$modositas_hiba = null;

if (isset($_GET['az'])) {
    $az = trim($_GET['az']);

    try {
        if ($_SERVER['HTTP_HOST'] === 'localhost') {
            $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        } else {
            $dbh = new PDO('mysql:host=localhost;dbname=adatb1_b223va', 'adatb1_b223va', 'zs64GuN?6',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        }

        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        $sqlSelect = "SELECT az, nev, varos FROM tulajdonos WHERE az = :az";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':az' => $az));
        $modositando = $sth->fetch(PDO::FETCH_ASSOC);

        if (! $modositando) {
            $modositas_hiba = 'A kiválasztott rekord nem található.';
        }
    }
    catch (PDOException $e) {
        $modositas_hiba = 'Hiba a rekord betöltésekor: ' . $e->getMessage();
    }
}
else {
    $modositas_hiba = 'Nem adott meg érvényes azonosítót.';
}
