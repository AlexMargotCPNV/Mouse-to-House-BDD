<?php
//=============================================================================
// Dispatcher script for ooless web apps.
// Author:  Pascal Hurni
// Date:    2022-08-27, 03-05-2014
//=============================================================================

require_once SOURCE_DIR.'/auth.php';

//=============================================================================
// Decode the given route and return the bag augmented with:
//    handler        string  PHP file name that should handle this request (without php extension).
//    status_code    int     HTTP code to return if already determined.
function dispatch($bag)
{
    $matches = [];

    // If any match defines a 'view', it should use our one and only layout.
    $bag['layout'] = 'views/layout';
    $bag['current_user'] = getCurrentUser();

    //-----------------------------------------------------------------------------
    if (preg_match('/^\/?$/', $bag['route'])) {
        $bag['handler'] = 'controllers/site/randomProduct';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/help$/', $bag['route'])) {
        if ($bag['method'] == 'POST') {
            $bag['handler'] = 'controllers/site/help';
        } elseif ($bag['method'] == 'GET') {
            $bag['view'] = 'views/site/helpPage';
        }
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/Items$/', $bag['route'])) {
        $bag['handler'] = 'controllers/site/products';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/item\/(\w+)$/', $bag['route'], $matches)) {
        $bag['code'] = $matches[1];
        $bag['handler'] = 'controllers/site/product';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/modifyItem\/(\w+)$/', $bag['route'], $matches)) {
        $bag['code'] = $matches[1];
        $bag['handler'] = 'controllers/site/adminProduct';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/profil$/', $bag['route'])) {
        $bag['handler'] = 'controllers/site/profil';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/checkout$/', $bag['route'])) {
        $bag['view'] = 'views/site/checkoutPage';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/afterpayement$/', $bag['route'])) {
        $bag['view'] = 'views/site/afterPaymentPage';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/ourTeam$/', $bag['route'])) {
        $bag['view'] = 'views/site/ourTeam';
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/cart$/', $bag['route'])) {
        $bag['view'] = 'views/site/cartPage';
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
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/login$/', $bag['route'])) {
        if ($bag['method'] == 'POST') {
            $bag['handler'] = 'controllers/site/login';
        } elseif ($bag['method'] == 'GET') {
            $bag['view'] = 'views/site/loginPage';
        }
    }
    //---------------Fonction Non terminée--------------------------------------------------------------
    elseif (preg_match('/^\/modifyData$/', $bag['route'])) {
        if ($bag['method'] == 'POST') {
            $bag['handler'] = 'controllers/site/';
        } elseif ($bag['method'] == 'GET') {
            $bag['view'] = 'views/site/signinPage';
        }
    }
    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/signin$/', $bag['route'])) {
        if ($bag['method'] == 'POST') {
            $bag['handler'] = 'controllers/site/myRegister';
        } elseif ($bag['method'] == 'GET') {
            $bag['view'] = 'views/site/signinPage';
        }
    }

    //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/logout$/', $bag['route'])) {
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
