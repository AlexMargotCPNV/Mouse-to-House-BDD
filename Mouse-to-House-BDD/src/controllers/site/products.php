<?php

require_once SOURCE_DIR.'/models/productsServicies.php';

$bag['data'] = [];
$bag['data']['mice'] = getMice();

$bag['view'] = 'views/site/itemsPage';
return $bag;
