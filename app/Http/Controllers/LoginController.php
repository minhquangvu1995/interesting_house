<?php
/**
 * Created by PhpStorm.
 * User: Minh Vu
 * Date: 25/08/2018
 * Time: 12:00
 */

namespace App\Http\Controllers;


class LoginController extends Controller
{
    public function showLoginPage()
    {
        return view('pages/login-v3');
    }
}