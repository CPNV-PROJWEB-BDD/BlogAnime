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
                <input class="PersoFeature" type="text" name="NomPerso" placeholder="Nom" required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="AliasPerso" placeholder="Nom de code/Surnom"
                       required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="AgePerso" placeholder="Age"
                       required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="AnimePerso"
                       placeholder="Anime" required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="FirstSeenPerso" placeholder="Première apparition" required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="s-text7 p-l-22 p-r-22" type="radio" name="SexePerso" value="Homme">Homme -
                <input class="s-text7 p-l-22 p-r-22" type="radio" name="SexePerso" value="Femme">Femme
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="SpecesPerso" placeholder="Especes"
                       required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="ResidencePerso"
                       placeholder="Résidence" required>
            </div>
            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="OriginePerso" placeholder="Origine" required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="AffiliationPerso" placeholder="Affiliation"
                       required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="OccupationPerso" placeholder="Occupation"
                       required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="FightingStylePerso"
                       placeholder="Type de combat(Optionel)">
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="PowerPerso"
                       placeholder="Pouvoir(Optionel)">
            </div>

            <div class="DescriptionContainer">
                    <textarea class="DescriptionBox" name="DescriptionPerso" placeholder="Description de votre personnage" required></textarea>
            </div>

            <button class="roundBtn" role="button">Ajouter le personnage</button>
        </form>

    </section>

<?php
$content = ob_get_clean();
require 'gabarit.php';

