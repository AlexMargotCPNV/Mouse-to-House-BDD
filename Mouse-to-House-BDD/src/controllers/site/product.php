<?php

require_once SOURCE_DIR.'/models/productsServicies.php';

$bag['data'] = [];

if (isset($_SESSION['current_user'])){
    $userAdmin = isUserAdmin();
    $userAdminValue = $userAdmin[0]['admin'];

    if ($userAdminValue == 1) {
        $bag['data']['mouse'] = getAdminMouse($bag['code']);
        $bag['view'] = 'views/site/itemPage';
    } else if ($userAdminValue == 0) {

        $bag['view'] = 'views/site/itemsPageUser';
    } else {
        $bag['data']['mouse'] = getMouse($bag['code']);
        $bag['view'] = 'views/site/itemPage';
    }
} else {
    $bag['data']['mouse'] = getMouse($bag['code']);
    $bag['view'] = 'views/site/itemPage';
}
return $bag;
