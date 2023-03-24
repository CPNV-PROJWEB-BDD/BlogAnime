<?php
/**
 * @file successConnexion.php
 * @brief file desciption
 * @author Created by Loe.LAVAUD
 * @version 17.03.2023
 */

ob_start();
$title = "BlogAnime";
?>

    <section>
        <title>Erreur de connexion</title>
        <link rel="stylesheet" type="text/css" href="css/successConnexion.css">
    </section>

    <div class="containSuccess">
        <h1>Connexion Réussi, amusez-vous bien !.</h1>
    </div>

<?php
$content = ob_get_clean();
require 'gabarit.php';
