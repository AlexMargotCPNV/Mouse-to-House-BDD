<?php

require_once SOURCE_DIR . '/models/profilSearch.php';

$bag['data']['user'][0] = userInformation();

$bag['view'] = 'views/site/profilePage';

return $bag;
