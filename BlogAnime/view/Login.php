<?php
/**
 * @file Login.php
 * @brief file desciption
 * @author Created by Loe.LAVAUD
 * @version 24.02.2023
 */

ob_start();
$title = "BlogAnime";
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="view/css/Login.css">
    </head>
    <body>
    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-b-30">
                    <form class="leave-comment" action="index.php?action=home" method="post">
                        <div class="bo4 size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="LogMail" placeholder="Adresse mail">
                        </div>

                        <div class="bo4 size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="LogPassword" placeholder="Mot de passe">
                        </div>

                        <button class="roundBtn" role="button">Se connecter</button>
                        <a class="Account" href="index.php?action=register">Pas de Compte ? Créez en un !</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    </body>


<?php
$content = ob_get_clean();
require 'gabarit.php';

