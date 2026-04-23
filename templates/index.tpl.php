<?php 
session_start(); 

// Oldalhoz tartozó logika betöltése
if (file_exists('./logicals/' . $keres['fajl'] . '.php')) {
    include("./logicals/{$keres['fajl']}.php");
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?= $ablakcim['cim'] . (isset($ablakcim['mottó']) ? ' | ' . $ablakcim['mottó'] : '') ?>
    </title>

    <!-- Alap stílus -->
    <link rel="stylesheet" href="./styles/stilus.css" type="text/css">

    <!-- Oldalspecifikus stílusok -->
 <link rel="stylesheet" href="./styles/kapcsolat.css">
<link rel="stylesheet" href="./styles/uzenetek.css">

</head>

<body>

<header>
    <?php if (isset($fejlec['kepforras'])) : ?>
        <img src="./images/<?= $fejlec['kepforras'] ?>" alt="<?= $fejlec['kepalt'] ?>">
    <?php endif; ?>

    <h1><?= $fejlec['cim'] ?></h1>

    <?php if (isset($fejlec['motto'])) : ?>
        <h2><?= $fejlec['motto'] ?></h2>
    <?php endif; ?>

    <?php if (isset($_SESSION['login'])) : ?>
        <div>
            Bejelentkezve: 
            <strong>
                <?= $_SESSION['csn'] . " " . $_SESSION['un'] . " (" . $_SESSION['login'] . ")" ?>
            </strong>
        </div>
    <?php endif; ?>
</header>


<div id="wrapper">

    <aside id="nav">
        <nav>
            <ul>
                <?php foreach ($oldalak as $url => $oldal) : ?>
                    <?php 
                        $megjelenhet = (!isset($_SESSION['login']) && $oldal['menun'][0]) 
                                    || (isset($_SESSION['login']) && $oldal['menun'][1]);
                    ?>

                    <?php if ($megjelenhet) : ?>
                        <li <?= ($oldal == $keres) ? 'class="active"' : '' ?>>
                            <a href="<?= ($url == '/') ? '.' : $url ?>">
                                <?= $oldal['szoveg'] ?>
                            </a>
                        </li>
                    <?php endif; ?>

                <?php endforeach; ?>
            </ul>
        </nav>
    </aside>


    <div id="content">
        <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
    </div>

</div>


<footer>
    <?php if (isset($lablec['copyright'])) : ?>
        &copy; <?= $lablec['copyright'] ?>
    <?php endif; ?>

    &nbsp;

    <?php if (isset($lablec['ceg'])) : ?>
        <?= $lablec['ceg'] ?>
    <?php endif; ?>
</footer>

</body>
</html>
