<?php
//=============================================================================
// Dispatcher script for ooless web apps.
// Author:  Pascal Hurni
// Date:    2022-08-27, 03-05-2014
//=============================================================================

//=============================================================================
// Decode the given route and return the bag augmented with:
//    handler        string  PHP file name that should handle this request (without php extension).
//    status_code    int     HTTP code to return if already determined.
function dispatch($bag)
{
    $matches = [];

    // If any match defines a 'view', it should use our one and only layout.
    $bag['layout'] = 'views/layout';

    //-----------------------------------------------------------------------------
    if (preg_match('/^\/?$/', $bag['route'])) {
        $bag['view'] = 'views/site/homepage';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/?$/', $bag['route'])) {
        $bag['view'] = 'views/site/helppage';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/?$/', $bag['route'])) {
        $bag['view'] = 'views/site/itemspage';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/?$/', $bag['route'])) {
        $bag['view'] = 'views/site/signinpage';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/?$/', $bag['route'])) {
        $bag['view'] = 'views/site/profilepage';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/?$/', $bag['route'])) {
        $bag['view'] = 'views/site/Checkout';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/?$/', $bag['route'])) {
        $bag['view'] = 'views/site/PayPage';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/?$/', $bag['route'])) {
        $bag['view'] = 'views/site/OurTeam';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/?$/', $bag['route']) && $bag['method'] == 'POST') {
        $bag['handler'] = 'controllers/site/helpController';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/?$/', $bag['route'])) {
        if (isset($_REQUEST['code'])) {
            $bag = $_REQUEST['code'];
            $bag['handler'] = 'controllers/site/itemController';
        } else {
            $bag['status_code'] = 404;
        }
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/?$/', $bag['route'])) {
        if (isset($_SESSION['auth'])) {
            $bag['handler'] = 'controllers/site/userController';
        }
    }





    elseif (preg_match('/^\/(login|register)$/', $bag['route'], $matches)) {
        if ($bag['method'] == 'POST') {
            $bag['handler'] = 'controllers/site/'.$matches[1];
        } elseif ($bag['method'] == 'GET') {
            $bag['view'] = 'views/site/'.$matches[1];
        }
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/logout$/', $bag['route']) && $bag['method'] == 'POST') {
        $bag['handler'] = 'controllers/site/logout';
    }
    //-----------------------------------------------------------------------------
    else {
        $bag['status_code'] = 404;
    }

    return $bag;
}

//=============================================================================
// Return the URL for the given named route (the opposite of the dispatcher)
function route($name) {
    return '/'.$name;
}
