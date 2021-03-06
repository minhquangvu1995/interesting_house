<?php
/**
 * Created by PhpStorm.
 * User: Minh Vu
 * Date: 16/08/2018
 * Time: 15:20
 */

namespace App\Repositories\Eloquent;


use App\Repositories\Eloquent\EloquentBaseRepository;
use App\Repositories\UserRepositoryInterface;
use App\User;

class UserEloquentRepository extends EloquentBaseRepository implements UserRepositoryInterface
{
    public function __construct()
    {
        //Thực hiện ngay khi gọi đến UserEloquentRepository này
        parent::__construct();
        $this->setModel();
    }

    public function setModel()
    {
        return User::class;
    }

    public function findByID(int $provider_id)
    {
        return $this->model->where('provider_id', $provider_id)->first();
    }

    public function all()
    {
        return parent::all(); // TODO: Change the autogenerated stub
    }
}
