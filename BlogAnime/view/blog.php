<?php

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
                            <?php if ($article['bannersPath'] == ""): ?>
                                <img class="imgPost" src="view/image/Banner/Image_Indisponible.png" alt="Images personnages">
                            <?php else: ?>
                            <img class="imgPost" src="<?= $article['bannersPath']; ?>" alt="Images personnages">
                            <?php endif; ?>
                            <article class="artPost"><p><?= $article['articles']; ?></p>
                                <h4>Apprenez pleins d'infos sur <?= $article['name']; ?> dans notre article!</h4>
                            </article>
                            <a class="readMore" href="index.php?action=article&name=<?= $article['name']; ?>">Read
                                More → </a>
                        </div>
                    </div>
<<<<<<< Updated upstream
                </div>
=======
                <?php else: ?>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <div id="margin">
                            <div id="box3">
                                <div class="blogPost">
                                    <?php if ($article['bannersPath'] == ""): ?>
                                        <img class="imgPost" src="view/image/Banner/Image_Indisponible.png"
                                             alt="Images personnages">
                                    <?php else: ?>
                                        <img class="imgPost" src="<?= $article['bannersPath']; ?>"
                                             alt="Images personnages">
                                    <?php endif; ?>
                                    <article class="artPost"><p>Archiver</p>
                                        <h4>Apprenez pleins d'infos sur <?= $article['name']; ?> dans notre
                                            article!</h4>
                                    </article>
                                    <a class="readMore" href="index.php?action=article&name=<?= $article['name']; ?>">
                                        Read More → </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
>>>>>>> Stashed changes
            <?php endforeach; ?>
        </div>
    </section>
<?php
$content = ob_get_clean();
require 'gabarit.php';