<?php
/**
 * @file contact.php
 * @brief this page contain all information to contact us
 * @author Created by Loe.LAVAUD
 * @version 24.02.2023
 */
ob_start();
$title = "BlogAnime";
?>
    <!DOCTYPE html>
    <html lang="en">
    <section>
        <link rel="stylesheet" type="text/css" href="../view/css/contact.css">
    </section>

    <section class="bgwhite">
        <form class="containerContact" action="mailto:Loe.Lavaud@cpnv.ch" method="get">
            <a><strong>Veuillez écrire votre adresse mail :</strong></a>
            <div class="MailContainer">
                <input class="MailBox" type="email" name="CustomerMail"
                       placeholder="Veuillez écrire votre adresse mail" required>
            </div>

            <a><strong>Contenu de votre demande :</strong></a>
            <div class="TextContainer">
                <textarea class="TextBox" name="CustomerRequest" placeholder="Contenu de votre demande"
                          required></textarea>
            </div>

            <button class="roundBtn" role="button">Envoyer le mail</button>
        </form>
    </section>

<?php
$content = ob_get_clean();
require 'gabarit.php';

