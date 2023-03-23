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
        <div class="welcome">
            <a>Bonjour !<br> et bienvenue sur <br> notre site de blog d'anime</a>
        </div>
        <img class="Welcome-Image" src="view/image/HomePicture.png">
    </div>

    <div class="Box">
        <div class="InfoContent">
            <a>notre site propose un blog contenant information et details sur les personnages d'animées</a>
        </div>
    </div>

    <div class="Box">
        <div class="Welcome-Image">
            <a>images decrivant un articles</a>
        </div>
        <div class="Enjoy">
            <a>Amusez vous à explorer notre site !<br>Et découvrez tout ce que vous chercher<br> sur vos personnage
            préféré !!!</a>
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

