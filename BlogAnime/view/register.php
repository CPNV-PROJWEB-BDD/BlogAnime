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
    <section>
        <link rel="stylesheet" type="text/css" href="view/css/Login.css">
    </section>

    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-b-30">
                    <form class="leave-comment" action="index.php?action=register" method="post">
                        <div class="bo4 size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="LogSurname" placeholder="Nom" required>
                        </div>

                        <div class="bo4 size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="LogFirstname" placeholder="Prénom" required>
                        </div>

                        <div class="bo4 size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="LogMail" placeholder="Adresse mail" required>
                        </div>

                        <div class="bo4 size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="LogPassword" placeholder="Mot de passe" required>
                        </div>

                        <button class="roundBtn" role="button">Créez votre compte</button>
                        <a class="Account" href="index.php?action=login">Déjà un Compte ? Connecte toi !</a>
                    </form>
                </div>
            </div>
        </div>
    </section>



<?php
$content = ob_get_clean();
require 'gabarit.php';

