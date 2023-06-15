<?php

require_once SOURCE_DIR.'/models/productsServicies.php';

$bag['data'] = [];
$bag['data']['mouse'] = getMouse($bag['code']);

$bag['view'] = 'views/site/adminItemPage';
return $bag;
