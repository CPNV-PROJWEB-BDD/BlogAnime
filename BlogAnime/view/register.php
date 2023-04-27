<?php
/**
 * @file register.php
 * @brief this page is where user can create an account
 * @author Created by Loe.LAVAUD
 * @version 08.03.2023
 */

ob_start();
$title = "BlogAnime";
?>
    <section>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </section>

    <section class="bgwhite">

        <form class="containerReg" action="index.php?action=register" method="post">
            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="LogSurname" placeholder="Nom" required>
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="LogFirstname" placeholder="Prénom"
                       required>
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="LogMail" placeholder="Adresse mail"
                       required>
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="LogPassword"
                       placeholder="Mot de passe" required>
            </div>

            <button class="roundBtn" role="button">Créez votre compte</button>
            <a class="Account" href="index.php?action=login">Déjà un Compte ? Connecte toi !</a>
        </form>

    </section>


<?php
$content = ob_get_clean();
require 'gabarit.php';

