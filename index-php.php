<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio dischi musicali</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/style.css">
</head>

<body>
    <header>
        <h1>Dischi musicali</h1>
    </header>
    <main>
        <div class="box-card">
            <?php 
                foreach ( $dischi as $disco ) {
                $img = $disco['img'];
                $titolo = $disco['titolo'];
                $autore = $disco['autore'];
                $anno = $disco['anno'];
            ?>
            <div class="card">
                <img src="<?= $img ?>" alt="poster">
                <h3 class="titolo-disco"><?= $titolo ?></h3>
                <h4 class="nome-autore"><?= $autore ?></h4>
                <h6 class="anno"><?= $anno ?></h6>
            </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>