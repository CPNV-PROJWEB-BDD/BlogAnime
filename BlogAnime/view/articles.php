<?php
ob_start();
$title = "BlogAnime";
?>
    <section>
        <link rel="stylesheet" type="text/css" href="view/css/articles.css">
    </section>
<?php foreach ($articles as $article) : ?>
    <section class="articlePage">
        <div class="DescBannerPerso">
            <img class="BannerPerso" src="<?= $article['Banner']; ?>" alt="Bannière personnages">
        </div>
        <div class="DescPerso">
            <div class="InfoPerso">
                <ul>
                    <strong> Nom :</strong>
                    <li><?= $article['Nom']; ?><br></li>
                </ul>
                <ul>
                    <strong>Nom de code :</strong>
                    <li><?= $article['Nom de code']; ?><br></li>
                </ul>
                <ul>
                    <strong>Age :</strong>
                    <li><?= $article['Age']; ?><br></li>
                </ul>
                <ul>
                    <strong>Anime :</strong>
                    <li><?= $article['Anime']; ?><br></li>
                </ul>
                <ul>
                    <strong>Première apparition :</strong>
                    <li><?= $article['Première apparition']; ?><br></li>
                </ul>
                <ul>
                    <strong>Sexe :</strong>
                    <li><?= $article['Sexe']; ?><br></li>
                </ul>
                <ul>
                    <strong>Especes :</strong>
                    <li><?= $article['Especes']; ?><br></li>
                </ul>
                <ul>
                    <strong>Residence :</strong>
                    <li><?= $article['Residence']; ?><br></li>
                </ul>
                <ul>
                    <strong>Origine :</strong>
                    <li><?= $article['Origine']; ?><br></li>
                </ul>
                <ul>
                    <strong>Affiliation :</strong>
                    <li><?= $article['Affiliation']; ?><br></li>
                </ul>
                <ul>
                    <strong>Occupation :</strong>
                    <li><?= $article['Occupation']; ?><br></li>
                </ul>
                <?php if ($article['Style de combat'] !== "Aucun"): ?>
                    <ul>
                        <strong>Style de combat :</strong>
                        <li><?= $article['Style de combat']; ?><br></li>
                    </ul>
                <?php endif; ?>
                <?php if ($article['Pouvoir'] !== "Aucun"): ?>
                    <ul>
                        <strong>Pouvoir :</strong>
                        <li><?= $article['Pouvoir']; ?><br></li>
                    </ul>
                <?php endif; ?>
                <ul>
                    <strong>Desciption :</strong><br><?= $article['Desciption']; ?>
                </ul>
            </div>
            <div class="DescImgPerso">
                <img class="ImgPerso" src="<?= $article['Images']; ?>" alt="Images personnages">
            </div>
        </div>
    </section>
<?php endforeach; ?>
<?php
$content = ob_get_clean();
require 'gabarit.php';

