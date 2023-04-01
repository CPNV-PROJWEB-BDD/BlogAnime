<?php
ob_start();
$title = "BlogAnime";
?>
    <section>
        <link rel="stylesheet" type="text/css" href="view/css/addArticle.css">
    </section>

    <section class="bgwhite">
        <form class="containerReg" action="index.php?action=addArticle" method="post">
            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="NomPerso" placeholder="Nom" required>
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="AliasPerso" placeholder="Nom de code/Surnom"
                       required>
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="AgePerso" placeholder="Age"
                       required>
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="AnimePerso"
                       placeholder="Anime" required>
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="FirstSeenPerso" placeholder="Première apparition" required>
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="s-text7 p-l-22 p-r-22" type="radio" name="SexePerso" value="Homme">Homme -
                <input class="s-text7 p-l-22 p-r-22" type="radio" name="SexePerso" value="Femme">Femme
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="SpecesPerso" placeholder="Especes"
                       required>
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="ResidencePerso"
                       placeholder="Résidence" required>
            </div>
            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="OriginePerso" placeholder="Origine" required>
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="AffiliationPerso" placeholder="Affiliation"
                       required>
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="OccupationPerso" placeholder="Occupation"
                       required>
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="FightingStylePerso"
                       placeholder="Type de combat(Optionel)">
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="PowerPerso"
                       placeholder="Pouvoir(Optionel)">
            </div>

            <div class="bo4 size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="DescriptionPerso"
                       placeholder="Description" required>
            </div>

            <button class="roundBtn" role="button">Ajouter le personnage</button>
        </form>

    </section>

<?php
$content = ob_get_clean();
require 'gabarit.php';

