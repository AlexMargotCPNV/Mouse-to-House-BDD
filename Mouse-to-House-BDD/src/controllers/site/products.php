<?php

require_once SOURCE_DIR . '/models/productsServicies.php';

$bag['data'] = [];


if (isset($_SESSION['current_user'])){
    $userAdmin = isUserAdmin();
    $userAdminValue = $userAdmin[0]['admin'];

    if ($userAdminValue == 1) {
        $bag['data']['mice'] = getAllMice();
        $bag['view'] = 'views/site/itemsPageAdmin';
    } else if ($userAdminValue == 0) {

        $bag['view'] = 'views/site/itemsPageUsers';
    } else {
        $bag['data']['mice'] = getMice();
        $bag['view'] = 'views/site/itemsPageUser';
    }
} else {
    $bag['data']['mice'] = getMice();
    $bag['view'] = 'views/site/itemsPageUser';
}
return $bag;
