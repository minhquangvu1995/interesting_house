<?php
/**
 * Created by PhpStorm.
 * User: Minh Vu
 * Date: 16/08/2018
 * Time: 14:50
 */

namespace App\Repositories\Eloquent;


use App\Repositories\BaseRepositoryInterface;

abstract class EloquentBaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->getModel();
    }

    /**
     * @param mixed
     */
    abstract public function setModel();

    /**
     * @return mixed
     */
    public function getModel()
    {
        $model = $this->setModel();
        $this->model = app()->make($model);
    }

    public function all()
    {
        return $this->model->get();
    }

    public function findByID(int $id)
    {
        // TODO: Implement findByID() method.
    }
}
