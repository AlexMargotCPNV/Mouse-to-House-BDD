<?php $title = "Profil";
ob_start();
?>
<div class="center">
    <form style="box-shadow: none" action="index.php?action=logout" method="POST">
        <h1>Votre compte :</h1>
        <?php echo '<p class="accountInfos"> Username : '. $_SESSION['username'] .'</p>';
        echo '<p class="accountInfos"> Name : '. $_SESSION['firstname'] .' '. $_SESSION['lastname'] .'</p>';
        echo '<p class="accountInfos"> E-mail : '. $_SESSION['email'] .'</p>'; ?>
        <input style="margin-top: 50px" type="submit" id='signaler' value='Se déconnecter'>
    </form>
</div>