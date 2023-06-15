<?php


require_once SOURCE_DIR . '/models/helpServicies.php';

sendHelp($_POST['DescriptionArea'], $_SESSION['current_user']);

$bag['view'] = 'views/site/helpPage';

return $bag;
