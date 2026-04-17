<?php
try {
    if($_SERVER['HTTP_HOST'] === 'localhost') {
        $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    } else {
        $dbh = new PDO('mysql:host=localhost;dbname=adatb1_b223va', 'adatb1_b223va', 'zs64GuN?6',
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    }

    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
    $sqlSelect = "SELECT az, nev, varos FROM tulajdonos ORDER BY az";
    $sth = $dbh->prepare($sqlSelect);
    $sth->execute();
    $tulajdonosok = $sth->fetchAll(PDO::FETCH_ASSOC);
}
catch (PDOException $e) {
    $tulajdonosok = array();
    $crud_hiba = "Hiba: " . $e->getMessage();
}
?>
