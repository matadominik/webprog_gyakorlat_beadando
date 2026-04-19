<?php
$kapcs_hibak = [];
$kapcs_adatok = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nev    = trim($_POST['nev'] ?? '');
    $email  = trim($_POST['email'] ?? '');
    $targy  = trim($_POST['targy'] ?? '');
    $uzenet = trim($_POST['uzenet'] ?? '');

    // Szerveroldali ellenőrzés
    if (strlen($nev) < 3) {
        $kapcs_hibak[] = 'A név legyen legalább 3 karakter.';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $kapcs_hibak[] = 'Adj meg érvényes e-mail címet.';
    }

    if (strlen($targy) < 3) {
        $kapcs_hibak[] = 'A tárgy legyen legalább 3 karakter.';
    }

    if (strlen($uzenet) < 10) {
        $kapcs_hibak[] = 'Az üzenet legyen legalább 10 karakter.';
    }

    if (empty($kapcs_hibak)) {
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

            // Ha be van jelentkezve, akkor eltároljuk az user ID-ját
            $felhasznaloId = isset($_SESSION['login_id']) ? (int)$_SESSION['login_id'] : null;

            // Mentés az adatbázisba
            $sqlInsert = "INSERT INTO kapcsolat_uzenetek
                          (felhasznalo_id, nev, email, targy, uzenet)
                          VALUES
                          (:felhasznalo_id, :nev, :email, :targy, :uzenet)";

            $stmt = $dbh->prepare($sqlInsert);
            $stmt->execute(array(
                ':felhasznalo_id' => $felhasznaloId,
                ':nev'            => $nev,
                ':email'          => $email,
                ':targy'          => $targy,
                ':uzenet'         => $uzenet
            ));

            $kapcs_adatok = [
                'nev'    => $nev,
                'email'  => $email,
                'targy'  => $targy,
                'uzenet' => $uzenet
            ];
        } catch (PDOException $e) {
            $kapcs_hibak[] = 'Hiba az üzenet mentésekor: ' . $e->getMessage();
        }
    }
} else {
    header('Location: kapcsolat');
    exit;
}
?>


