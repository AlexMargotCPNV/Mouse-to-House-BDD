<?php

require_once SOURCE_DIR . '/models/userRegister.php';


register($_POST['username'], $_POST['surname'], $_POST['firstname'], $_POST['Email'], $_POST['telNumber'], $_POST['password']);

$bag['view'] = 'views/site/homePage';

return $bag;