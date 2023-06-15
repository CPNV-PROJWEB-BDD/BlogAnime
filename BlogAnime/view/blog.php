<?php

ob_start();
$title = "Blog";
?>

    <section>
        <link rel="stylesheet" type="text/css" href="../view/css/blog.css">
    </section>

    <section class="Block-blog">
        <div class="persoContainer">
            <?php if ($article['active'] = 1): foreach ($articles as $article) : ?>
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
                </div>
            <?php endforeach; endif;?>
        </div>
    </section>
<?php
$content = ob_get_clean();
require 'gabarit.php';