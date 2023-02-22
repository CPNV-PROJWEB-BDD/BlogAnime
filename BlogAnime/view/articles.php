<?php
ob_start();
$title = "BlogAnime";
?>



<?php
$content = ob_get_clean();
require 'gabarit.php';

