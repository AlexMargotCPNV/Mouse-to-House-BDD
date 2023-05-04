<?php

logoutUser();

$bag['response_headers'] = ['Location' => '/'];
return $bag;
