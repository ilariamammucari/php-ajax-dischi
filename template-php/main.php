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