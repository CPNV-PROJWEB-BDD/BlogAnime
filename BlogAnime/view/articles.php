<?php
ob_start();
$title = "BlogAnime";
?>

<?php foreach ($articles as $article) : ?>
<section>
    <img class="imgPost" src="<?=$article['Banner']; ?>" alt="test">
</section>
<?php endforeach; ?>
<?php
$content = ob_get_clean();
require 'gabarit.php';

