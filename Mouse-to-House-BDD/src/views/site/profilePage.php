<?php $title = "Profil";
if (null !==($_SESSION['current_user'] && null !==($_SESSION['userEmail']))){?>
<div class="center">
    <form style="box-shadow: none" action="logout" method="POST">
        <h1>Votre compte :</h1>
        <?php echo '<p class="accountInfos"> Username : ' . $_SESSION['username'] . '</p>';
        echo '<p class="accountInfos"> Name : ' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . '</p>';
        echo '<p class="accountInfos"> E-mail : ' . $_SESSION['userEmail'] . '</p>'; ?>
        <input style="margin-top: 50px" type="submit" id='signaler' value='Se déconnecter'>
    </form>
</div>
<?php }else {
    echo "vous n'êtes pas connecté";
} ?>
