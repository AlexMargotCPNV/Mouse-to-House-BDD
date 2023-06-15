<?php $title = "Inscription" ?>
<div id="container">
    <!-- zone de connexion -->

    <form action="signin" method="POST">
        <h1>Créer un compte</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

        <label><b>Nom</b></label>
        <input type="text" placeholder="Entrer le nom" name="surname" required>

        <label><b>Prénom</b></label>
        <input type="text" placeholder="Entrer le prénom" name="firstname" required>

        <label><b>E-mail</b></label>
        <input type="text" placeholder="Entrer l'E-mail" name="Email" required>

        <label><b>Numéro de téléphone</b></label>
        <input type="number" placeholder="Entrer le numéro de téléphone" name="telNumber">

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <input type="submit" id='submit' value='Créer le compte'>

    </form>
    <div class="accountLink">
        <a>Vous avez dèja un compte ?<br></a>
        <a href="login"> Cliquez ici.</link></a>
    </div>
</div>
