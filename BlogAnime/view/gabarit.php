<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>
<body>
<!--Header-->
<header id="topbar">
    <a href="index.php" class="Image-header"><img class="Logo" src="view/image/Logo_BlogAnime.png" alt="logo"></a>
    <nav class="navbar">

        <div class="ulNavbar">
            <a class="navlink" href="index.php?action=home">Accueil</a>
            <a class="navlink" href="index.php?action=Blog">Blog</a>
            <a class="navlink" href="index.php?action=AboutUs">A propos de nous</a>
            <a id="Login" href="#">Login</a>
        </div>
        <div class="navbarbtn" onclick="displayNavbar(this)">
            <div class="barbtn1"></div>
            <div class="barbtn2"></div>
            <div class="barbtn3"></div>
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
                    <img class="Image-header" id="instagram" src="view/image/instagram-logo.png">
                    <img class="Image-header" id="twitter" src="view/image/twitter-logo.jpg">
                    <img class="Image-header" id="reddit" src="view/image/reddit-logo.jpg">
                    <img class="Image-header" id="facebook" src="view/image/facebook-logo.jpg">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</footer>
</body>
<script>
    function displayNavbar(btnIcon) {
        btnIcon.classList.toggle("change");

        //var links = document.getElementById("ulNavbar");
        //if (links.style.display === "block") {
        //    links.style.display = "none";
        //} else {
        //    links.style.display = "block";
        //}
    }
</script>

