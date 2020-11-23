<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    /**
     * Get model from table model
     *
     * @return Model
     */
    public function getModel();

    /**
     * @param $id
     * @return mixed
     */
    public function getOne($id);

    /**
     * @param array $conditions
     * @return mixed
     */
    public function getMany(array $conditions);

    /**
     * @param array $data
     * @return mixed
     */
    public function insert(array$data);

    /**
     * @return mixed
     */
    public function insertMany();

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @param array $conditions
     * @return mixed
     */
    public function deleteMany(array $conditions);
}
