<?php $title = "Connexion" ?>
<div id="container">
    <!-- zone de connexion -->

    <form action="/login" method="POST">
        <h1>Connexion</h1>

        <label><b>Username</b></label>
        <input type="text" placeholder="Entrer votre username" name="username" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer votre mot de passe" name="password" required>

        <input type="submit" id='submit' value='Se connecter'>

    </form>
    <div class="accountLink">
        <a>Vous n'avez pas encore de compte ?<br></a>
        <a href="signin"> Cliquez ici.</link></a>
    </div>
</div>