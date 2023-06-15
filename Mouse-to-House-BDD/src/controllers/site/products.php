<?php

require_once SOURCE_DIR.'/models/productsServicies.php';

$bag['data'] = [];
$bag['data']['mice'] = getMice();
$userAdmin = isUserAdmin();
$userAdminValue = $userAdmin[0]['admin'];

if ($userAdminValue == 1){
    $bag['view'] = 'views/site/itemsPageAdmin';
}else{
    $bag['view'] = 'views/site/itemsPageUser';
}

return $bag;
