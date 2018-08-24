<?php
/**
 * Created by PhpStorm.
 * User: Minh Vu
 * Date: 16/08/2018
 * Time: 16:18
 */

namespace App\Repositories\Eloquent;


use App\Models\Post;
use App\Repositories\PostRepositoryInterface;

class PostEloquentRepository extends EloquentBaseRepository implements PostRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        parent::__construct();
        $this->setModel();
    }

    public function setModel()
    {
        return Post::class;
    }

    public function allActive()
    {
        return $this->model->where('active', 1)->get();
    }

    public function findByID(int $id)
    {
        return $this->model->where('id', $id)->where('active', 1)->first();
    }
}
