<?php

require_once SOURCE_DIR.'/models/productsServicies.php';

$bag['data'] = [];
$bag['data']['mouse'] = getMouse();
$bag['data']['randomMouseCode'] = getRandomMouseCode();

$bag['view'] = 'views/site/homePage';
return $bag;
