<?php $title = "Aide" ?>
<div id="DescriptionDiv">
    <?php
    // Si un utilisateur n'est pas connecté alors renvoyer l'utilisateur à la page de connexion
    if(!isset($_SESSION['auth'])) {
        echo '<form style="box-shadow: none;margin-top: 50px" href="login" id="formSignaler" method="post">';
    } else {    // Sinon envoyer le message de demande de l'aide
        echo '<form style="box-shadow: none;margin-top: 50px" action="help" id="formSignaler" method="post">';
    }
    ?>
        <label id="Problème"><h4>Avez-vous un problème ?</h4></label><br>
        <label id="Problème"><h4>Décrivez-le pour que nous puissions vous aider</h4></label>
        <p><label for="Description" id="description"><h5>Description :</h5></label></p>
        <textarea type="text" id="Description" name="DescriptionArea"></textarea>
        <br>
        <br>
        <input type="submit" id='signaler' value='Signaler le problème' required>
</div>
<br><br><br>
<div id="DivContact">
    <label id="Contact">Nous contacter :</label><br>
    <label id="mail"> Mail : <a href="mailto:MouseToHouse@exemple.com">MouseToHouse@exemple.com</a></label><br>
    <label id="telephone" style="margin-bottom: 50px">Tél : 012 345 67 89</label><br>
</div>