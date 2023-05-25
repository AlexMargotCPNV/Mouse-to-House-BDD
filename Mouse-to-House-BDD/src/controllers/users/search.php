<?php

require_once SOURCE_DIR.'/models/user.php';

$bag['data'] = ['users' => getAllUsers()];

$bag['view'] = 'views/users/search';
return $bag;
