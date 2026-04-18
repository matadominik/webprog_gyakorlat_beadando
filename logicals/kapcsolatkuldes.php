<?php
$kapcs_hibak  = [];
$kapcs_adatok = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nev    = trim($_POST['nev']    ?? '');
    $email  = trim($_POST['email']  ?? '');
    $targy  = trim($_POST['targy']  ?? '');
    $uzenet = trim($_POST['uzenet'] ?? '');

    // Szerveroldali ellenőrzés [32]
    if (strlen($nev) < 3) {
        $kapcs_hibak[] = 'A név legalább 3 karakter hosszú legyen.';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $kapcs_hibak[] = 'Érvényes e-mail címet adj meg.';
    }

    if (strlen($targy) < 3) {
        $kapcs_hibak[] = 'A tárgy legalább 3 karakter hosszú legyen.';
    }

    if (strlen($uzenet) < 10) {
        $kapcs_hibak[] = 'Az üzenet legalább 10 karakter hosszú legyen.';
    }

    if (empty($kapcs_hibak)) {
        try {
            // Adatbázis-kapcsolat – ugyanaz, mint a login/CRUD részekben [3][25][26]
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

            // ha bejelentkezett, elmentjük a felhasználó id-ját (Üzenetek menü miatt) [3][25][32]
            $felhasznaloId = isset($_SESSION['login_id']) ? (int)$_SESSION['login_id'] : null;

            $sqlInsert = "INSERT INTO kapcsolat_uzenetek (felhasznalo_id, nev, email, targy, uzenet)
                          VALUES (:felhasznalo_id, :nev, :email, :targy, :uzenet)";
            $stmt = $dbh->prepare($sqlInsert);
            $stmt->execute(array(
                ':felhasznalo_id' => $felhasznaloId ?: null,
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


