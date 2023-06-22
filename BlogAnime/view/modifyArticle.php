<?php
ob_start();
$title = "BlogAnime";
?>
    <section>
        <link rel="stylesheet" type="text/css" href="view/css/addArticle.css">
    </section>

    <section class="bgwhite">
<?php foreach ($articles as $article) : ?>
        <form class="containerArticle" action="index.php?action=modifyArticle" method="post">
            <div >
                <input class="PersoFeature" type="text" name="idarticles" value="<?= $article['idarticles'] ?>"
                       readonly>
            </div>
            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Name" placeholder="Nom" value="<?= $article['name']; ?>"
                       required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="CodeName" placeholder="Nom de code/Surnom"
                       value="<?= $article['codename']; ?>" required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Age" placeholder="Age" value="<?= $article['age']; ?>"
                       required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Anime" value="<?= $article['anime']; ?>"
                       placeholder="Anime" required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="FirstAppear" placeholder="Première apparition"
                       value="<?= $article['firstappear']; ?>" required>
            </div>

            <div class="ContainerPersoFeature">
                <?php if ($article['gender']=='Homme'): ?>
                    <input class="s-text7 p-l-22 p-r-22" type="radio" name="Gender" value="Homme" checked  >Homme -
                <?php else: ?>
                    <input class="s-text7 p-l-22 p-r-22" type="radio" name="Gender" value="Homme"   >Homme -
                <?php endif; ?>
                <?php if ($article['gender']=='Femme'): ?>
                    <input class="s-text7 p-l-22 p-r-22" type="radio" name="Gender" value="Femme" checked  >Femme
                <?php else: ?>
                    <input class="s-text7 p-l-22 p-r-22" type="radio" name="Gender" value="Femme"   >Femme
                <?php endif; ?>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Species" placeholder="Especes"
                       value="<?= $article['species']; ?>" required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="LocationLive" placeholder="Résidence"
                       value="<?= $article['locationLive']; ?>" required>
            </div>
            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Origin" placeholder="Origine"
                       value="<?= $article['origin']; ?>" required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Afiliate" placeholder="Affiliation"
                       value="<?= $article['afiliate']; ?>" required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Occupation" placeholder="Occupation"
                       value="<?= $article['occupation']; ?>" required>
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="FightStyle"
                       placeholder="Type de combat(Optionel)" value="<?= $article['fightstyle']; ?>">
            </div>

            <div class="ContainerPersoFeature">
                <input class="PersoFeature" type="text" name="Power"
                       placeholder="Pouvoir(Optionel)" value="<?= $article['power']; ?>">
            </div>

            <div class="DescriptionContainer">
                <textarea class="DescriptionBox" name="Description" placeholder="Description de votre personnage"
                          required><?= $article['articles']; ?></textarea>
            </div>


            <button class="roundBtn" role="button" type="submit">modifier le personnage</button>
        </form>

    </section>
<?php endforeach; ?>

<?php
$content = ob_get_clean();
require 'gabarit.php';

