<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>homepage</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <script src="/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<h1 class="pageTitle"><a href="/" id="titre">Mouse to House</a></h1>
<nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
        <ul class="navbar-nav nav-left">
            <li class="nav-item">
                <a class="nav-link active" href="/"><img class="logo" src="/images/MouseToHouse_Logo.png"></a>

                <?php
                if (isset($bag['data']['user']['isUserAdmin']) && $bag['data']['user']['isUserAdmin'] == 1){
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="/adminItems">Produits</a>';
                    echo '</li>';
                }else {
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="/userItems">Produits</a>';
                    echo '</li>';
                }
                ?>
            <li class="nav-item">
                <a class="nav-link" href="/help">Aide</a>
            </li>
        </ul>
        <ul class="navbar-nav nav-right">
            <li class="nav-item">
                <a class="nav-link" href="/cart">Panier</a>
            </li>
            <li class="nav-item">
                <?php
                if (!isset($_SESSION['auth'])) {
                    echo '<a class="nav-link" href="/login">Se connecter</a>';
                } else {
                    echo '<a class="nav-link" href="/profile">' . $_SESSION['username'] . '</a>';
                } ?>
            </li>
            <li class="nav-item">
                <?php
                if (!isset($_SESSION['auth'])) {
                    echo '<a class="nav-link" href="/signin">Créer un compte</a>';
                } else {
                    echo '<a class="nav-link" href="/logout">Se deconnecter</a>';
                }
                ?>
            </li>
        </ul>
    </div>
</nav>

<?= $content ?>

<footer id="footer">
    <a href="www.facebook.com"><img class="social" src="/images/Facebook.png"></a>
    <a href="www.instagram.com"><img class="social" src="/images/Instagram.png"></a>
</footer>
</body>
</html>
