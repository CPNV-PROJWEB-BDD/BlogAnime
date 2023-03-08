<?php
/**
 * @file register.php
 * @brief file desciption
 * @author Created by Loe.LAVAUD
 * @version 08.03.2023
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
                    <form class="leave-comment" action="index.php?action=register" method="post">
                        <div class="bo4 size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="LogSurname" placeholder="Nom">
                        </div>

                        <div class="bo4 size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="LogFirstname" placeholder="Prénom">
                        </div>

                        <div class="bo4 size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="LogMail" placeholder="Adresse mail">
                        </div>

                        <div class="bo4 size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="LogPassword" placeholder="Mot de passe">
                        </div>

                        <input type="submit" value="Se connecter" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                    </form>
                </div>
            </div>
        </div>
    </section>

    </body>


<?php
$content = ob_get_clean();
require 'gabarit.php';

