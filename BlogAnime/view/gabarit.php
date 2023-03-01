<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>
<body>
<!--Header-->
<header>
    <!-- Header desktop -->

<<<<<<< HEAD
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
=======
    <div id="Box1">
             <a href="index.php" class="Logo"><img class="Image-header" src="../view/image/Logo_BlogAnime.png"></a>

         <nav class="menu">
             <ul class="main_menu">
                 <li><a class="navlink" href="index.php">Accueil</a></li>
                 <li><a class="navlink" href="index.php?action=Blog">Blog</a></li>
                 <li><a class="navlink" href="index.php?action=AboutUs">A propos de nous</a></li>
             </ul>
         </nav>

         <div id="Login">
             <a id="LoginText" href="index.php?action=Login">Login</a>
         </div>
     </div>
>>>>>>> 726233d6e1f078546ab2bce7afe8465ebab00456

    <!-- Header Mobile -->


</header>

<?= $content; ?>

<!--Footer-->
<<<<<<< HEAD
<footer>
    <div class="box-footer">
        <div class="box-left">
            <img class="Image-header" src="view/image/Logo_BlogAnime.png">
            <br>
            <br>

            <div id="form">
                <label for="fMail"></label>
                <input type="text" id="fMail" name="newsletter" placeholder="Newsletter ">
                <a type="submit" id="btnSubmit">></a>
            </div>
            <div>
                <a id="copyright">copyright Oichi No Kata</a>
            </div>
        </div>
        <div class="box-right">
            <table>
                <tr>
                    <td>Aide</td>
                    <td>Accueil</td>
                </tr>
                <tr>
                    <td>Nous contacter</td>
                    <td>blog</td>
                </tr>
                <tr>
                    <td>politique de copyright</td>
                    <td>A propos de nous</td>
                </tr>
                <tr>
                    <td>
                    <img class="logo" id="instagram" src="view/image/instagram-logo.png">
                    <img class="logo" id="twitter" src="view/image/twitter-logo.jpg">
                    <img class="logo" id="reddit" src="view/image/reddit-logo.jpg">
                    <img class="logo" id="facebook" src="view/image/facebook-logo.jpg">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</footer>
</body>


=======
</body>
>>>>>>> 726233d6e1f078546ab2bce7afe8465ebab00456
