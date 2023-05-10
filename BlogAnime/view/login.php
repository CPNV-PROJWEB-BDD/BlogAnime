<?php
ob_start();
$title = "BlogAnime";
?>
    <section>
        <link rel="stylesheet" type="text/css" href="view/css/Login.css">
    </section>

    <section class="bgwhite">
        <form class="containerLog" action="index.php?action=login" method="post">
            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="LogMail"
                       placeholder="Adresse mail" required>
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="LogPassword"
                       placeholder="Mot de passe" required>
            </div>

            <button class="roundBtn" role="button">Se connecter</button>
            <a class="Account" href="index.php?action=register">Pas de Compte ? Créez en un !</a>
        </form>
    </section>


<?php
$content = ob_get_clean();
require 'gabarit.php';

