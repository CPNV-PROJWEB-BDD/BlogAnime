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

    <div id="Box2">

             <a href="index.php" class="Logo"><img class="Image-header" src="view/image/Logo_BlogAnime.png"></a>


         <nav class="menu">
             <ul class="main_menu">
                 <li><a class="navlink" href="index.php">Accueil</a></li>
                 <li><a class="navlink" href="index.php?action=Blog">Blog</a></li>
                 <li><a class="navlink" href="index.php?action=AboutUs">A propos de nous</a></li>
             </ul>
         </nav>
         <div id="Login">
             <a id="LoginText" href="#">Login</a>
         </div>
     </div>

     <!-- Header Mobile -->


</header>

<?=$content; ?>

<!--Footer-->
</body>


