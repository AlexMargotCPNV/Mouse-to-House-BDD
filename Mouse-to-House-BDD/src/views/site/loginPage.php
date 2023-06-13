<?php $title = "Connexion" ?>
<div id="container">
    <!-- zone de connexion -->

    <form action="login" method="POST">
        <h1>Connexion</h1>

        <label><b>E-mail</b></label>
        <input type="text" placeholder="Entrer l'E-mail" name="email" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <input type="submit" id='submit' value='Se connecter'>
        <?php //if ($_SESSION['loginFailed'] == 2) : ?>
            <!--<h5><span style="color:red">E-mail ou mot de passe incorrect!</span></h5>-->
        <?php // endif ?>

    </form>
    <div class="accountLink">
        <a>Vous n'avez pas encore de compte ?<br></a>
        <a href="signin"> Cliquez ici.</link></a>
    </div>
</div>