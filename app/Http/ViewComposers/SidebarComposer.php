<?php
/**
 * Created by PhpStorm.
 * User: Minh Vu
 * Date: 22/08/2018
 * Time: 10:20
 */

namespace App\Http\ViewComposers;


use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SidebarComposer
{
    public function compose(View $view)
    {
        $data = [
            'user' => Auth::user() ? Auth::user()->toArray() : []
        ];

        $view->with('data', $data);
    }
}