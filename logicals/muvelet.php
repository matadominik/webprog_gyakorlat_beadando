<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || ($_POST['action'] ?? '') !== 'hozzaadas') {
    return;
}

$nev = trim($_POST['nev'] ?? '');
$varos = trim($_POST['varos'] ?? '');

try {
    if($_SERVER['HTTP_HOST'] === 'localhost') {
        $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    } else {
        $dbh = new PDO('mysql:host=localhost;dbname=adatb1_b223va', 'adatb1_b223va', 'zs64GuN?6',
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    }
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

    $sqlInsert = "INSERT INTO tulajdonos (nev, varos) VALUES (:nev, :varos)";
    $stmt = $dbh->prepare($sqlInsert);
    $stmt->execute(array(
        ':nev' => $nev,
        ':varos' => $varos
    ));

    header('Location: crud');
    exit;
}
catch (PDOException $e) {
    $muvelet_hiba = 'Hiba a mentés közben: ' . $e->getMessage();
}
