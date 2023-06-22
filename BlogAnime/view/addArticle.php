<?php
ob_start();
$title = "BlogAnime";
?>
    <section>
        <link rel="stylesheet" type="text/css" href="view/css/addArticle.css">
    </section>

    <section class="bgwhite">
        <form class="containerArticle" action="index.php?action=addArticle" method="post">
            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Name" placeholder="Nom" required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="CodeName" placeholder="Nom de code/Surnom"
                       required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Age" placeholder="Age"
                       required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Anime"
                       placeholder="Anime" required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="FirstAppear" placeholder="Première apparition" required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="s-text7 p-l-22 p-r-22" type="radio" name="Gender" value="Homme">Homme -
                <input class="s-text7 p-l-22 p-r-22" type="radio" name="Gender" value="Femme">Femme
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Species" placeholder="Especes"
                       required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="LocationLive"
                       placeholder="Résidence" required>
            </div>
            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Origin" placeholder="Origine" required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Afiliate" placeholder="Affiliation"
                       required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Occupation" placeholder="Occupation"
                       required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="FightStyle"
                       placeholder="Type de combat(Optionel)">
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Power"
                       placeholder="Pouvoir(Optionel)">
            </div>

            <div class="DescriptionContainer">
                    <textarea class="DescriptionBox" name="Description"
                              placeholder="Description de votre personnage" required></textarea>
            </div>

            <button class="roundBtn" role="button">Ajouter le personnage</button>
        </form>

    </section>

<?php
$content = ob_get_clean();
require 'gabarit.php';

