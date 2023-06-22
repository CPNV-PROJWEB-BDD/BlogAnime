<?php
ob_start();
$title = "BlogAnime";
?>

    <section>
        <link rel="stylesheet" type="text/css" href="view/css/home.css">
    </section>

    <section id="article">
        <!-- Crée un total de 3 bloques en colonne qui sont eux même séparer en 2 bloques en ligne chacuns contenant
        un text et une image et 1 bloque contenant un bouton pour s'inscrire-->
        <div class="Border-page">
            <div class="Box">
                <div class="Welcome-Image" id="imgDemonSlayer"></div>
                <div class="welcome">
                    <h3>Bonjour !<br> et bienvenue sur <br> notre site de blog d'anime</h3>
                </div>
            </div>

            <div class="Box">
                <div class="InfoContent">
                    <h3>Notre blog sur les animes <br> propose des infos vérifiées par des fans <br> pour des fans</h3>
                </div>
                <div class="ImageContent"id="imgGifUwU">
                </div>
            </div>

            <div class="Box">
                <div class="Welcome-Image" id="imgErenJaeger">
                </div>
                <div class="Enjoy">
                    <h3>Amusez vous à explorer notre site !<br>Et découvrez tout ce que vous chercher<br> sur vos
                        personnage
                        préféré !!!</h3>
                </div>
            </div>

            <div class="Box-image">
                <div id="Join">
                    <!-- Bloque contenant le bouton qui renvoie à la page d'inscription -->
                    <a href="index.php?action=register">
                        <button class="recBtn" role="button">Click to Join us !</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
$content = ob_get_clean();
require 'gabarit.php';

