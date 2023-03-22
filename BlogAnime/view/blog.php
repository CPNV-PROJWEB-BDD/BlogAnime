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
    <!DOCTYPE html>
    <html lang="en">
<section>
    <link rel="stylesheet" type="text/css" href="../view/css/blog.css">
</section>

<section class="Block-blog">
        <div id="margin">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div id="box3">
                    <div class="blogPost">
                        <img class="imgPost" src="../view/image/testImg.png" alt="test">
                        <article class="artPost"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum omnis
                                minus delectus laborum magni quos corrupti doloribus aliquid corporis. Illum consectetur
                                omnis cupiditate dolores, ullam ratione architecto ea odio beatae.</p>
                        </article>
                        <a class="readMore" href="#0">Read More </a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <div id="margin">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div id="box3">
                    <div class="blogPost">
                        <img class="imgPost" src="../view/image/testImg.png" alt="test">
                        <article class="artPost"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum omnis
                                minus delectus laborum magni quos corrupti doloribus aliquid corporis. Illum consectetur
                                omnis cupiditate dolores, ullam ratione architecto ea odio beatae.</p>
                        </article>
                        <a class="readMore" href="#0">Read More </a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <div id="margin">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div id="box3">
                    <div class="blogPost">
                        <img class="imgPost" src="../view/image/testImg.png" alt="test">
                        <article class="artPost"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum omnis
                                minus delectus laborum magni quos corrupti doloribus aliquid corporis. Illum consectetur
                                omnis cupiditate dolores, ullam ratione architecto ea odio beatae.</p>
                        </article>
                        <a class="readMore" href="#0">Read More </a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
</section>

<?php
$content = ob_get_clean();
require 'gabarit.php';
