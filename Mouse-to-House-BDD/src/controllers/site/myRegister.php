<?php

require_once SOURCE_DIR . '/models/userRegister.php';

$bag['data'] = [];
register($_POST['username'], $_POST['surname'], $_POST['firstname'], $_POST['Email'], $_POST['telNumber'], $_POST['password']);

$bag['view'] = 'views/site/loginPage';

return $bag;