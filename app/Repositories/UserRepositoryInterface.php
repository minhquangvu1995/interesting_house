<?php
/**
 * Created by PhpStorm.
 * User: Minh Vu
 * Date: 16/08/2018
 * Time: 15:21
 */

namespace App\Repositories;


interface UserRepositoryInterface
{
//    Không cần nữa vì bảng user không có phân biệt active hay không
//    function getAllActive();

    function all();
}