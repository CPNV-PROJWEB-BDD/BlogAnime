<?php
ob_start();
$title = "BlogAnime";
?>

    <section>
        <link rel="stylesheet" type="text/css" href="view/css/home.css">
    </section>

    <section>
        <div class="Border-page">
            <div class="Box">
                <img class="Welcome-Image" src="view/image/HomePicture.png">
                <div class="welcome">
                    <h3>Bonjour !<br> et bienvenue sur <br> notre site de blog d'anime</h3>
                </div>
            </div>

            <div class="Box">
                <div class="InfoContent">
                    <h3>Notre blog sur les animes <br> propose des infos vérifiées par des fans <br> pour des fans</h3>
                </div>
                <div class="ImageContent">
                    <img id="ImageAnimeContent" src="../view/image/GIF/UwU.gif">
                </div>
            </div>

            <div class="Box">
                <div class="Welcome-Image">
                    <img id="ImageAnimeContent" src='../view/image/Banner/Eren_Jaeger.png'>
                </div>
                <div class="Enjoy">
                    <h3>Amusez vous à explorer notre site !<br>Et découvrez tout ce que vous chercher<br> sur vos
                        personnage
                        préféré !!!</h3>
                </div>
            </div>

            <div class="Box-image">
                <div id="Join">
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

