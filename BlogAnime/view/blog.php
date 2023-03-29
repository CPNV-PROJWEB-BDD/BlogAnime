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
        <div class="ligne1">
            <div id="margin">
                <div id="box3">
                    <div class="blogPost">
                        <img class="imgPost" src="../view/image/Banner/Maka_Albarn.png" alt="test">
                        <article class="artPost"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum omnis
                                minus delectus laborum magni quos corrupti doloribus aliquid corporis. Illum consectetur
                                omnis cupiditate dolores, ullam ratione architecto ea odio beatae.</p>
                        </article>
                        <a class="readMore" href="index.php?action=article">Read More </a>
                    </div>
                </div>
            </div>
            <div id="margin">
                <div id="box3">
                    <div class="blogPost">
                        <img class="imgPost" src="../view/image/Banner/Natsu.png" alt="test">
                        <article class="artPost"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum omnis
                                minus delectus laborum magni quos corrupti doloribus aliquid corporis. Illum consectetur
                                omnis cupiditate dolores, ullam ratione architecto ea odio beatae.</p>
                        </article>
                        <a class="readMore" href="index.php?action=article">Read More </a>
                    </div>
                </div>
            </div>
            <div id="margin">
                <div id="box3">
                    <div class="blogPost">
                        <img class="imgPost" src="../view/image/Banner/Kirito.png" alt="test">
                        <article class="artPost"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum omnis
                                minus delectus laborum magni quos corrupti doloribus aliquid corporis. Illum consectetur
                                omnis cupiditate dolores, ullam ratione architecto ea odio beatae.</p>
                        </article>
                        <a class="readMore" href="index.php?action=article">Read More </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ligne2">
            <div id="margin">
                <div id="box3">
                    <div class="blogPost">
                        <img class="imgPost" src="../view/image/Banner/Hitori.png" alt="test">
                        <article class="artPost"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum omnis
                                minus delectus laborum magni quos corrupti doloribus aliquid corporis. Illum consectetur
                                omnis cupiditate dolores, ullam ratione architecto ea odio beatae.</p>
                        </article>
                        <a class="readMore" href="index.php?action=article">Read More </a>
                    </div>
                </div>
            </div>
            <div id="margin">
                <div id="box3">
                    <div class="blogPost">
                        <img class="imgPost" src="../view/image/Banner/Ichigo.png" alt="test">
                        <article class="artPost"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum omnis
                                minus delectus laborum magni quos corrupti doloribus aliquid corporis. Illum consectetur
                                omnis cupiditate dolores, ullam ratione architecto ea odio beatae.</p>
                        </article>
                        <a class="readMore" href="index.php?action=article" >Read More </a>
                    </div>
                </div>
            </div>
            <div id="margin">
                <div id="box3">
                    <div class="blogPost">
                        <img class="imgPost" src="../view/image/Banner/Naruto.png" alt="test">
                        <article class="artPost"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum omnis
                                minus delectus laborum magni quos corrupti doloribus aliquid corporis. Illum consectetur
                                omnis cupiditate dolores, ullam ratione architecto ea odio beatae.</p>
                        </article>
                        <a class="readMore" href="index.php?action=article">Read More </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ligne3">
            <div id="margin">
                <div id="box3">
                    <div class="blogPost">
                        <img class="imgPost" src="../view/image/Banner/Lelouch.png" alt="test">
                        <article class="artPost"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum omnis
                                minus delectus laborum magni quos corrupti doloribus aliquid corporis. Illum consectetur
                                omnis cupiditate dolores, ullam ratione architecto ea odio beatae.</p>
                        </article>
                        <a class="readMore" href="index.php?action=article">Read More </a>
                    </div>
                </div>
            </div>
            <div id="margin">
                <div id="box3">
                    <div class="blogPost">
                        <img class="imgPost" src="../view/image/Banner/Eren_Jaeger.png" alt="test">
                        <article class="artPost"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum omnis
                                minus delectus laborum magni quos corrupti doloribus aliquid corporis. Illum consectetur
                                omnis cupiditate dolores, ullam ratione architecto ea odio beatae.</p>
                        </article>
                        <a class="readMore" href="index.php?action=article">Read More </a>
                    </div>
                </div>
            </div>
            <div id="margin">
                <div id="box3">
                    <div class="blogPost">
                        <img class="imgPost" src="../view/image/Banner/Deku.png" alt="test">
                        <article class="artPost"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum omnis
                                minus delectus laborum magni quos corrupti doloribus aliquid corporis. Illum consectetur
                                omnis cupiditate dolores, ullam ratione architecto ea odio beatae.</p>
                        </article>
                        <a class="readMore" href="index.php?action=article">Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
$content = ob_get_clean();
require 'gabarit.php';
