<?php
/**
 * Created by PhpStorm.
 * User: Minh Vu
 * Date: 16/08/2018
 * Time: 14:51
 */

namespace App\Repositories;


interface BaseRepositoryInterface
{
    function all();

    function findByID(int $id);
}