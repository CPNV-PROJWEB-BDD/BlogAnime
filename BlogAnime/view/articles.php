<?php
ob_start();
$title = "BlogAnime";
?>
    <section>
        <link rel="stylesheet" type="text/css" href="view/css/articles.css">
    </section>
<?php foreach ($articles as $article) : ?>
    <section class="articlePage">
        <?php if ($article['Banner'] == ""): ?>
            <div class="topBanner" style="background-image: url('view/image/Banner/Image_Indisponible.png')"></div>
        <?php else: ?>
            <div class="topBanner" style="background-image: url('<?= $article['Banner']; ?>')"></div>
        <?php endif; ?>
        <div class="page">
            <aside class="smallDescription">

                <div class="infoCharacter">
                    <h2 class="titleAside"><?= $article['Nom']; ?></h2>
                    <?php if ($article['Images'] == ""): ?>
                        <img class="imgCharacter" src="view/image/Perso/PersoSansImage.webp">
                    <?php else: ?>
                        <img class="imgCharacter" src="<?= $article['Images']; ?>">
                    <?php endif; ?>
                    <div class="dataCharacter"><strong>Nom :</strong> <br><?= $article['Nom']; ?></div>
                    <div class="dataCharacter"><strong>Nom de code :</strong> <br><?= $article['Nom de code']; ?></div>
                    <div class="dataCharacter"><strong>Age :</strong> <br><?= $article['Age']; ?> ans</div>
                    <div class="dataCharacter"><strong>Anime :</strong> <br><?= $article['Anime']; ?></div>
                    <div class="dataCharacter"><strong>Première apparition :</strong> <br><?= $article['Premiere apparition']; ?></div>
                    <div class="dataCharacter"><strong>Sexe :</strong> <br><?= $article['Sexe']; ?></div>
                    <div class="dataCharacter"><strong>Especes :</strong> <br><?= $article['Especes']; ?></div>
                    <div class="dataCharacter"><strong>Residence :</strong> <br><?= $article['Residence']; ?></div>
                    <div class="dataCharacter"><strong>Origine :</strong> <br><?= $article['Origine']; ?></div>
                    <div class="dataCharacter"><strong>Affiliation :</strong> <br><?= $article['Affiliation']; ?></div>
                    <div class="dataCharacter"><strong>Occupation :</strong> <br><?= $article['Occupation']; ?></div>
                    <?php if ($article['Style de combat'] != "Aucun"): ?>
                        <div class="dataCharacter"><strong>Style de combat :</strong> <br><?= $article['Style de combat']; ?></div>
                    <?php endif; ?>
                    <?php if ($article['Pouvoir'] != "Aucun"): ?>
                        <div class="dataCharacter"><strong>Pouvoir :</strong><br><?= $article['Pouvoir']; ?></div>
                    <?php endif; ?>

                </div>

            </aside>
            <article><?= $article['Description']; ?>
            </article>
        </div>
    </section>
<?php endforeach; ?>
<?php
$content = ob_get_clean();
require 'gabarit.php';

