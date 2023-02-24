<?php
/**
 * @file blog.php
 * @brief file desciption
 * @author Created by Loe.LAVAUD
 * @version 24.02.2023
 */

ob_start();
$title = "Blog";
?>



<?php
$content = ob_get_clean();
require 'gabarit.php';
