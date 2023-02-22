<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title; ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>
<body>
<!--Header-->
<header>
    <!-- Header desktop -->
    <div class="wrap_menu">
        <a href="index.php" class="logo"><img class="Image-header" src="view/image/Logo_BlogAnime.png"></a>
        <div>
            <nav class="menu">
                <ul class="main_menu">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php?action=Blog">Blog</a></li>
                    <li><a href="index.php?action=AboutUs">A propos de nous</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <a href="#">Login</a>
        </div>
    </div>

    <!-- Header Mobile -->


</header>

<?=$content; ?>

<!--Footer-->
</body>


