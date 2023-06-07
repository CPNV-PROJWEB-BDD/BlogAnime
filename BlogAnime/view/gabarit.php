<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="view/css/style.css">

</head>
<body>
<!--Header-->
<header id="topbar">

    <nav class="navbar">
        <a href="index.php" class="Logo-header"><img class="Logo" src="view/image/Logo_BlogAnime.png" alt="logo"></a>
        <div class="mobileNavbar">
            <div id="navbarbtn" class="navbarbtn" onclick="btndisplayNavbar(this)">
                <div id="barbtn1" class="barbtn1"></div>
                <div id="barbtn2" class="barbtn2"></div>
                <div id="barbtn2" class="barbtn3"></div>
            </div>
        </div>
        <div id="ulNavbar">
            <a class="navlink" href="index.php?action=home">Accueil</a>
            <a class="navlink" href="index.php?action=blog">Blog</a>
            <a class="navlink" href="index.php?action=aboutUs">A propos de nous</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a class="navArticle" href="index.php?action=addArticle">Ajouter un article</a>
            <?php else: ?>
                <a class="navArticle" href="index.php?action=addArticle" hidden>Ajouter un article</a>
            <?php endif; ?>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a id="Username"><?=$_SESSION['user_id']; ?></a>
                <a id="Login" href="index.php?action=logout">Logout</a>
            <?php else: ?>
                <a id="Login" href="index.php?action=login">Login</a>
            <?php endif; ?></div>
        <div>
        </div>

    </nav>
</header>


<?= $content; ?>


<!--Footer-->
<footer id="footer">
    <div id="FooterInformation">
        <div id="footerform">
            <img id="Logo-footer" src="view/image/Logo_BlogAnime-white.png">
            <div id="form">
                <label for="fMail"></label>
                <input type="text" id="fMail" name="newsletter" placeholder="Newsletter ">
                <a type="submit" id="btnSubmit">></a>
            </div>
        </div>
        <div id="navigationalKeys">
            <table>
                <tr>
                    <td><span><a href="index.php?action=home">Accueil</a></span></td>
                    <td><span><a href="index.php?action=contact">Contacter</a></span></td>
                </tr>
                <tr>
                    <td><span><a href="index.php?action=blog">Blog</a></span></td>
                    <td><a>Aide</a></td>
                </tr>
                <tr>
                    <td><span><a href="index.php?action=aboutUs">A propos de nous</a></span></td>
                </tr>

                <tr>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <td><span><a href="index.php?action=addArticle">Ajouter un article</a></span></td>
                    <?php else: ?>
                        <td><span><a href="index.php?action=addArticle" hidden>Ajouter un article</a></span></td>
                    <?php endif; ?>
                </tr>
                <tr>
                <?php if (isset($_SESSION['user_id'])): ?>
                        <td><span><a href="index.php?action=logout">logout</a></span></td>
                <?php else: ?>
                        <td><span><a href="index.php?action=login">login</a></span></td>
                <?php endif; ?>
                </tr>
            </table>
            <div id="contactDetails">
                <a href="https://instagram.com/bloganime2023?igshid=ZDdkNTZiNTM=">
                    <img class="Social-Footer" id="instagram" src="view/image/instagram.png">
                </a>
                <a href="https://twitter.com/BlogAnime2023">
                    <img class="Social-Footer" id="twitter" src="view/image/twitter.png">
                </a>
                <a href="https://www.reddit.com/user/BlogAnime2023">
                    <img class="Social-Footer" id="reddit" src="view/image/reddit-logo.png">
                </a>
                <a href="https://www.facebook.com/profile.php?id=100090937893061">
                    <img class="Social-Footer" id="facebook" src="view/image/facebook.png">
                </a>
            </div>

        </div>

    </div>
    <div id="legalContent">
        <span><a href="#">cookie</a></span>
        <span><a href="#">cookie</a></span>
        <span><a href="#">cookie</a></span>
    </div>
</footer>
<script src="view/script/master.js"></script>
</body>


<!--
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

<div class="footer">
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
                <a href="https://instagram.com/bloganime2023?igshid=ZDdkNTZiNTM=">
                    <img class="Image-header" id="instagram" src="view/image/instagram-logo.png">
                </a>
                <a href="https://twitter.com/BlogAnime2023">
                    <img class="Image-header" id="twitter" src="view/image/twitter-logo.jpg">
                </a>
                <a href="https://www.reddit.com/user/BlogAnime2023">
                    <img class="Image-header" id="reddit" src="view/image/reddit-logo.jpg">
                </a>
                <a href="https://www.facebook.com/profile.php?id=100090937893061">
                    <img class="Image-header" id="facebook" src="view/image/facebook-logo.jpg">
                </a>
            </td>
        </tr>
    </table>
</div>
-->