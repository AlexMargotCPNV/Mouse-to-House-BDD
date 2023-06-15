<?php $title = "Profil";

echo '<br>';
$username = $bag['data']['user'][0][0]['username'];
$surname = $bag['data']['user'][0][0]['surname'];
$firstname = $bag['data']['user'][0][0]['firstname'];
$email = $bag['data']['user'][0][0]['email'];

?>
<div class="center">
    <form style="box-shadow: none" action="logout" method="POST">
        <h1>Votre compte :</h1>
        <?php echo '<p class="accountInfos"> Username : ' . $username . '</p>';
        echo '<p class="accountInfos"> Name : ' . $firstname . ' ' . $surname . '</p>';
        echo '<p class="accountInfos"> E-mail : ' . $email . '</p>'; ?>
        <input style="margin-top: 50px" type="submit" id='signaler' value='Se déconnecter'>
    </form>
</div>

