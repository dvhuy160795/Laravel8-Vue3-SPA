<?php


namespace App\Repositories;


abstract class RepositoryAbstract implements RepositoryInterface
{
    protected $model;

    public function getModel()
    {
        // TODO: Implement getModel() method.
    }

    public function getOne($id)
    {
        // TODO: Implement getOne() method.
    }

    public function getMany(array $conditions)
    {
        // TODO: Implement getMany() method.
    }

    public function insert(array $data)
    {
        // TODO: Implement insert() method.
    }

    public function insertMany()
    {
        // TODO: Implement insertMany() method.
    }

    public function update($id, array $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function deleteMany(array $conditions)
    {
        // TODO: Implement deleteMany() method.
    }
}
