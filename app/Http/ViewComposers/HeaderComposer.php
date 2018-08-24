<?php
/**
 * Created by PhpStorm.
 * User: Minh Vu
 * Date: 22/08/2018
 * Time: 13:34
 */

namespace App\Http\ViewComposers;


use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HeaderComposer
{
    public function compose(View $view)
    {
        $data = [
            'user' => Auth::user()->toArray()
        ];
        $view->with('data', $data);
    }
}