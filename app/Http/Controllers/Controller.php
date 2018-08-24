<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Auth;

class Controller extends BaseController
{
    public function loadViewComponents()
    {
        View::composer('components/header', function ($view) {
            $userInfo = Auth::user() ? Auth::user()->toArray() : [];
            $view->with(['user' => $userInfo]);
        });

        View::composer('components/profile', function ($view) {
            $userInfo = Auth::user() ? Auth::user()->toArray() : [];
            $view->with(['user' => $userInfo]);
        });
    }
}
