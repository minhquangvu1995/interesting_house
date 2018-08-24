<?php
/**
 * Created by PhpStorm.
 * User: Minh Vu
 * Date: 16/08/2018
 * Time: 16:19
 */

namespace App\Repositories;


interface PostRepositoryInterface
{
    function allActive();

    function findByID(int $id);
}