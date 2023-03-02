<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>
<body>
<<<<<<< HEAD
<!--Header-->
<header id="topbar">
    <a href="index.php" class="Image-header"><img class="Logo" src="view/image/Logo_BlogAnime.png" alt="logo"></a>
    <nav class="navbar">
        <div class="ulNavbar">
            <a class="navlink" href="index.php?action=home">Accueil</a>
            <a class="navlink" href="index.php?action=Blog">Blog</a>
            <a class="navlink" href="index.php?action=AboutUs">A propos de nous</a>
            <a id="Login" href="#">Login </a>
        </div>
        <div class="navbarbtn" onclick="displayNavbar(this)">
            <div class="barbtn1"></div>
            <div class="barbtn2"></div>
            <div class="barbtn3"></div>
        </div>
    </nav>
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

    <!-- Header Mobile -->


>>>>>>> ce42fe927ab9f9a5e4d50c2ead63e8c08790920c
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
<<<<<<< HEAD
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
=======
>>>>>>> ce42fe927ab9f9a5e4d50c2ead63e8c08790920c
