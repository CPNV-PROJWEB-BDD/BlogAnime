<?php
/**
 * @file Login.php
 * @brief file desciption
 * @author Created by Loe.LAVAUD
 * @version 24.02.2023
 */

ob_start();
$title = "BlogAnime";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="view/css/Login.css">
</head>
<body>
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-b-30">
                <form class="leave-comment">
                    <div class="bo4 size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="ArticleCode" placeholder="Code de l'article">
                    </div>

                    <div class="bo4 size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="ArticleBrand" placeholder="Marque de l'article">
                    </div>

                    <input type="submit" value="Se connecter" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                </form>
            </div>
        </div>
    </div>
</section>

</body>




<?php

$fileFullPath = "";//le chemin complet jusqu'au fichier
$TextToWrite = "";
$fileName = "";

$fileFullPath = setFullPath("LoginName".".json");
$TextToWrite = '{ <br></t>"Pseudo":"$Pseudo",<br></t>"Password":"$password" }<br><br> ';

writeMsgInFile($fileFullPath, $TextToWrite);


function setFullPath($fName)
{
    /* Help
        get current directory -> http://php.net/manual/en/function.getcwd.php
    */
    $currentPath = getcwd();

    $fullPathToFileTemp = $currentPath . "\\" . $fName;

    return $fullPathToFileTemp;
}

function writeMsgInFile($fileFullPath, $lineToWrite)
{
    /* Help
    //http://php.net/manual/en/function.fopen.php
    */

    $strWriter = null;

    //on va appeler la fonction permettant de récupérer la date et l'heure à l'instant où l'on va écrire


    $strWriter = fopen($fileFullPath, "a");
    //puis on ajoute la date et le heure à la ligne que l'on désire ajouter au fichier


    fwrite($strWriter, $lineToWrite  . "\r\n");
    fclose($strWriter);
}?>

<?php
$content = ob_get_clean();
require 'gabarit.php';

