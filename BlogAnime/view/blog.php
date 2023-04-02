<?php
/**
 * @file blog.php
 * @brief file desciption
 * @author Created by Loe.LAVAUD
 * @version 24.02.2023
 */

ob_start();
$title = "Blog";
?>

    <section>
        <link rel="stylesheet" type="text/css" href="../view/css/blog.css">
    </section>
    <!-- TODO Loé : refaire le blog pour faire en sorte qu'il ajoute un nouveau blog a chaque fois -->

    <section class="Block-blog">
        <div class="persoContainer">
            <?php foreach ($articles as $article) : ?>
                <div id="margin">
                    <div id="box3">
                        <div class="blogPost">
                            <?php if ($article['Banner'] == ""): ?>
                                <img class="imgPost" src="view/image/Banner/Image_Indisponible.png" alt="Images personnages">
                            <?php else: ?>
                            <img class="imgPost" src="<?= $article['Banner']; ?>" alt="Images personnages">
                            <?php endif; ?>
                            <article class="artPost"><p><?= $article['Desciption']; ?></p>
                                <h4>Apprenez pleins d'infos sur <?= $article['Nom']; ?> dans notre article!</h4>
                            </article>
                            <a class="readMore" href="index.php?action=article&name=<?= $article['Nom']; ?>">Read
                                More → </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php
$content = ob_get_clean();
require 'gabarit.php';