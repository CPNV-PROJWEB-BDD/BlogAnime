<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <script src="view/script/master.js"></script>
</head>
<body>
<!--Header-->
<header id="topbar">

    <nav class="navbar">
        <a href="index.php" class="Image-header"><img class="Logo" src="view/image/Logo_BlogAnime.png" alt="logo"></a>
        <div class="mobileNavbar">
            <div class="navbarbtn" onclick="displayNavbar(this)">
                <div class="barbtn1"></div>
                <div class="barbtn2"></div>
                <div class="barbtn3"></div>
            </div>
        </div>
        <div id="ulNavbar">
            <a class="navlink" href="index.php?action=home">Accueil</a>
            <a class="navlink" href="index.php?action=Blog">Blog</a>
            <a class="navlink" href="index.php?action=AboutUs">A propos de nous</a>
            <a id="Login" href="#">Login</a>
        </div>

    </nav>
</header>


<?= $content; ?>


<!--Footer-->
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
                        <a href="https://instagram.com/bloganime2023?igshid=ZDdkNTZiNTM="><img class="Image-header"
                                                                                               id="instagram"
                                                                                               src="view/image/instagram-logo.png"></a>
                        <a href="https://twitter.com/BlogAnime2023"><img class="Image-header" id="twitter"
                                                                         src="view/image/twitter-logo.jpg"></a>
                        <a href="https://www.reddit.com/user/BlogAnime2023"><img class="Image-header" id="reddit"
                                                                                 src="view/image/reddit-logo.jpg"></a>
                        <a href="https://www.facebook.com/profile.php?id=100090937893061"><img class="Image-header"
                                                                                               id="facebook"
                                                                                               src="view/image/facebook-logo.jpg"></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</footer>
</body>
