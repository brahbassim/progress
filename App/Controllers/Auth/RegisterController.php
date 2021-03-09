<?php

namespace App\Controllers;

use \Core\View;

/**
 * Auth controller
 *
 * PHP version >= 7.0
 */
class RegisterController extends \Core\Controller
{

    /**
     * Show the register page
     *
     * @return void
     */
    public function show()
    {
        View::renderTemplate('Auth/register.html');
    }

    /**
     * Store session auth
     *
     * @return void
     */
    public function store(){}
}
