<?php
if (isset($_POST['felhasznalo']) && isset($_POST['jelszo'])) {
    try {
        // Kapcsolódás
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

        // Felhasználó keresése
        $sqlSelect = "SELECT id, csaladi_nev, uto_nev
                      FROM felhasznalok
                      WHERE bejelentkezes = :bejelentkezes
                        AND jelszo = SHA1(:jelszo)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(
            ':bejelentkezes' => $_POST['felhasznalo'],
            ':jelszo' => $_POST['jelszo']
        ));

        $row = $sth->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $_SESSION['csn'] = $row['csaladi_nev'];
            $_SESSION['un'] = $row['uto_nev'];
            $_SESSION['login'] = $_POST['felhasznalo'];
            $_SESSION['login_id'] = $row['id'];

            header("Location: .");
            exit;
        } else {
            $errormessage = "Hibás felhasználónév vagy jelszó!";
        }
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: " . $e->getMessage();
    }
} else {
    header("Location: .");
    exit;
}
?>


