<?php


namespace App\Services;


abstract class ServiceAbstract implements ServiceInterface
{
    protected $repository;

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
    }
}
