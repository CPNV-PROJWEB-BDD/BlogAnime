<?php
ob_start();
$title = "BlogAnime";
?>
    <section>
        <link rel="stylesheet" type="text/css" href="view/css/articles.css">
    </section>
<?php foreach ($articles as $article) : ?>
    <section class="articlePage">
        <div class="topBanner"></div>
        <div class="page">
            <aside class="smallDescription">

                <div class="infoCharacter">
                    <h2 class="titleAside">Name</h2>
                    <img class="imgCharacter" src="image/Perso/Lelouch.png">
                    <div class="dataCharacter">Nom :</div>
                    <div class="dataCharacter">Nom de code : Zero<br>
                        Lelouch Lamperouge<br>
                        Julius Kingsley<br>
                        Alan Spacer<br>
                        Warlock<br>
                        Lulu<br>
                        Prince Noir<br>
                        L'empereur démon<br>
                        L'ennemi du monde<br>
                        Demon<br>
                        L.L.</div>
                    <div class="dataCharacter">Age</div>
                    <div class="dataCharacter">Première apparition :</div>
                    <div class="dataCharacter">Sexe :</div>
                    <div class="dataCharacter">Especes :</div>
                    <div class="dataCharacter">Residence :</div>
                    <div class="dataCharacter">Origine :</div>
                    <div class="dataCharacter">Affiliation :</div>
                    <div class="dataCharacter">Occupation :</div>
                    <div class="dataCharacter">Style de combat :</div>
                    <div class="dataCharacter">Pouvoir :</div>
                </div>

            </aside>
            <article>dkmslkfdlksa
            </article>
        </div>
    </section>
<?php endforeach; ?>
<?php
$content = ob_get_clean();
require 'gabarit.php';

