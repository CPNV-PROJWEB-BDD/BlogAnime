<?php

ob_start();
$title = "BlogAnime";
?>
    <section>
        <link rel="stylesheet" type="text/css" href="view/css/articles.css">
    </section>
<?php foreach ($articles as $article) : ?>
    <section class="articlePage">
        <?php if ($article['bannersPath'] == ""): ?>
            <div class="topBanner" style="background-image: url('view/image/Banner/Image_Indisponible.png')"></div>
        <?php else: ?>
            <div class="topBanner" style="background-image: url('<?= $article['bannersPath']; ?>')"></div>
        <?php endif; ?>
        <div class="page">
            <aside class="smallDescription">

                <div class="infoCharacter">
                    <h2 class="titleAside"><?= $article['name']; ?></h2>
                    <?php if ($article['imagePath'] == ""): ?>
                        <img class="imgCharacter" src="view/image/Perso/PersoSansImage.webp">
                    <?php else: ?>
                        <img class="imgCharacter" src="<?= $article['imagePath']; ?>">
                    <?php endif; ?>
                    <div class="dataCharacter"><strong>Nom :</strong> <br><?= $article['name']; ?></div>
                    <div class="dataCharacter"><strong>Nom de code :</strong> <br><?= $article['codename']; ?></div>
                    <div class="dataCharacter"><strong>Age :</strong> <br><?= $article['age']; ?> ans</div>
                    <div class="dataCharacter"><strong>Anime :</strong> <br><?= $article['anime']; ?></div>
                    <div class="dataCharacter"><strong>Première apparition :</strong> <br><?= $article['firstappear']; ?></div>
                    <div class="dataCharacter"><strong>Genre :</strong> <br><?= $article['gender']; ?></div>
                    <div class="dataCharacter"><strong>Especes :</strong> <br><?= $article['species']; ?></div>
                    <div class="dataCharacter"><strong>Residence :</strong> <br><?= $article['locationLive']; ?></div>
                    <div class="dataCharacter"><strong>Origine :</strong> <br><?= $article['origin']; ?></div>
                    <div class="dataCharacter"><strong>Affiliation :</strong> <br><?= $article['afiliate']; ?></div>
                    <div class="dataCharacter"><strong>Occupation :</strong> <br><?= $article['occupation']; ?></div>
                    <?php if ($article['fightstyle'] != "Aucun"): ?>
                        <div class="dataCharacter"><strong>Style de combat :</strong> <br><?= $article['fightstyle']; ?></div>
                    <?php endif; ?>
                    <?php if ($article['power'] != "Aucun"): ?>
                        <div class="dataCharacter"><strong>Pouvoir :</strong><br><?= $article['power']; ?></div>
                    <?php endif; ?>
<<<<<<< Updated upstream
                    <div class="dataCharacter">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        archive
                        <a href="index.php?action=showModifyArticle&id=<?=$article['idarticles'];?>">modifier</a>
                    <?php endif; ?>
=======

                    <div class="modifyContainer">
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <?php if ($article['active'] == 0): ?>
                                <a class="archive"
                                   href="index.php?action=archiveArticleOn&name=<?= $article['name']; ?>">Activer</a>
                            <?php else: ?>
                                <a href="index.php?action=archiveArticleOff&name=<?= $article['name']; ?>">Archiver</a>
                            <?php endif; ?>
                            <a class="archive"
                               href="index.php?action=showModifyArticle&id=<?= $article['idarticles']; ?>">Modifier</a>

                        <?php endif; ?>
>>>>>>> Stashed changes
                    </div>

                </div>

            </aside>
            <article><?= $article['articles']; ?>
            </article>
        </div>
    </section>
<?php endforeach; ?>
<?php
$content = ob_get_clean();
require 'gabarit.php';

