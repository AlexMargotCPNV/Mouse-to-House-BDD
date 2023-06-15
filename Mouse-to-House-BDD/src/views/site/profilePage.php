<?php $title = "Profil";

print_r($bag['data']['user']);

?>
<div class="center">
    <form style="box-shadow: none" action="logout" method="POST">
        <h1>Votre compte :</h1>
        <?php echo '<p class="accountInfos"> Username : ' . $bag['data']['user'] . '</p>';
        echo '<p class="accountInfos"> Name : ' . $bag['firstname'] . ' ' . $bag['lastname'] . '</p>';
        echo '<p class="accountInfos"> E-mail : ' . $bag['userEmail'] . '</p>'; ?>
        <input style="margin-top: 50px" type="submit" id='signaler' value='Se déconnecter'>
    </form>
</div>

