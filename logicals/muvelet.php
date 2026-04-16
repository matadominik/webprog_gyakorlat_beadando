<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    return;
}

$action = $_POST['action'] ?? '';

try {
    if($_SERVER['HTTP_HOST'] === 'localhost') {
        $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    } else {
        $dbh = new PDO('mysql:host=localhost;dbname=adatb1_b223va', 'adatb1_b223va', 'zs64GuN?6',
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    }
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

    if ($action === 'hozzaadas') {
        $nev = trim($_POST['nev'] ?? '');
        $varos = trim($_POST['varos'] ?? '');

        $sqlInsert = "INSERT INTO tulajdonos (nev, varos) VALUES (:nev, :varos)";
        $stmt = $dbh->prepare($sqlInsert);
        $stmt->execute(array(
            ':nev' => $nev,
            ':varos' => $varos
        ));
    }
    elseif ($action === 'modositas') {
        $az = trim($_POST['az'] ?? '');
        $nev = trim($_POST['nev'] ?? '');
        $varos = trim($_POST['varos'] ?? '');

        $sqlUpdate = "UPDATE tulajdonos SET nev = :nev, varos = :varos WHERE az = :az";
        $stmt = $dbh->prepare($sqlUpdate);
        $stmt->execute(array(
            ':nev' => $nev,
            ':varos' => $varos,
            ':az' => $az
        ));
    }
    elseif ($action === 'torles') {
        $az = trim($_POST['az'] ?? '');

        $sqlDelete = "DELETE FROM tulajdonos WHERE az = :az";
        $stmt = $dbh->prepare($sqlDelete);
        $stmt->execute(array(
            ':az' => $az
        ));
    }
    else {
        return;
    }

    header('Location: crud');
    exit;
}
catch (PDOException $e) {
    $muvelet_hiba = 'Hiba a mentés közben: ' . $e->getMessage();
}
