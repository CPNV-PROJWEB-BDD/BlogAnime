<?php
/**
 * @file AboutUs.php
 * @brief file desciption
 * @author Created by Loe.LAVAUD
 * @version 24.02.2023
 */


ob_start();
$title = "AboutUs";
?>
    <!DOCTYPE html>
    <html lang="en">
    <section>
        <link rel="stylesheet" type="text/css" href="../view/css/AboutUs.css">
    </section>
<section>
    <!-- Création du premier bloque contenant le titre de la page -->
<div class="Block-global">
    <div class="Block-AboutUs">
        <div class="Titre-AboutUs">
            <a class="Texte-Titre-AboutUs">
                <h1>A propos de nous</h1>
                <h3>On vous explique tout!</h3>
            </a>
        </div>
        <div class="Info-AboutUs">

            <!-- Création d'un deuxième bloque qui s'occupera d'avoir 3 paragraphes contenant les informations sur les créateurs -->
            <h2>Qui sommes nous?</h2>
            <p>
                Grands fans d'animés et de manga, BlogAnime est un projet de passionnés qui se sont mis au défis de
                faire un blog avec des articles intéréssant pour les fans francophones !
            </p>

            <br>

            <h2>Notre histoire</h2>
            <p>
                Passionnés de mangas et d'animés depuis notre tendre enfance et ayant été de grands utilisateurs de
                blogs, nous nous sommes mis aux défis de créer un blog pour les fans comme nous! Nouveau fan ou fan
                depuis des années, nous regroupons des infos exceptionnelles! Avec notre équipe de développement qui
                sont fans depuis des années, nous vous proposant des articles enrichissant et qui donnerant envie au
                lecteur!
            </p>

            <br>

            <h2>Réseaux sociaux</h2>
            <p>
                Nous possédants des réseaux sociaux avec les fans pourrons suivres les actus du moment en rapport avec
                les mangas et animés !
                <br>
            <!-- Liens qui mènent aux réseaux sociaux du site -->
            <ul>
                <a class="lien-Réseaux-Sociaux-AboutUs" href="https://instagram.com/bloganime2023?igshid=ZDdkNTZiNTM="><h4>Instagram</h4></a>
                <a class="lien-Réseaux-Sociaux-AboutUs" href="https://twitter.com/BlogAnime2023"><h4>Twitter</h4></a>
                <a class="lien-Réseaux-Sociaux-AboutUs" href="https://www.reddit.com/user/BlogAnime2023"><h4>Reddit</h4></a>
                <a class="lien-Réseaux-Sociaux-AboutUs" href="https://www.facebook.com/profile.php?id=100090937893061""><h4>Facebook</h4></a>
            </ul>

            </p>
        </div>
    </div>
</div>
</section>
<?php
$content = ob_get_clean();
require 'gabarit.php';
