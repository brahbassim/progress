<?php

namespace App\Controllers;

use \Core\View;

/**
 * Auth controller
 *
 * PHP version >= 7.0
 */
class LoginController extends \Core\Controller
{

    /**
     * Show the login page
     *
     * @return void
     */
    public function show()
    {
        View::renderTemplate('Auth/login.html');
    }

    /**
     * Store session auth
     *
     * @return void
     */
    public function store(){}
}
