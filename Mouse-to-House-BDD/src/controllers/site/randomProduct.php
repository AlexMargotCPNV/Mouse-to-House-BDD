<?php

require_once SOURCE_DIR.'/models/productsServicies.php';

$bag['data'] = [];
$tempCode = getRandomMouseCode();
$bag['data']['mouse'] = getMouse($tempCode);
$bag['view'] = 'views/site/homePage';
return $bag;
 