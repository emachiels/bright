<?php
/**
 * Created by PhpStorm.
 * User: emach
 * Date: 20/02/2018
 * Time: 22:12
 */

namespace App\Repositories;

use Illuminate\Cache\Repository as Cache;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Application;

abstract class Repository
{
    /**
     * @var string The cache tag name of the repository
     */
    protected $tag = '';

    /**
     * @var Cache The cache
     */
    protected $cache;

    /**
     * @var Model The model to be used in the repository
     */
    protected $model;

    public function __construct(Application $app, Cache $cache)
    {
        $this->cache = $cache;
        $this->model = $this->getModel();
    }

    abstract function getModel();

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Returns all the requested models
     *
     * @param array|mixed $columns
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all($columns = ['*'])
    {
        if($this->cache()->has('all')) {
            return $this->fetch('all');
        }
        return $this->model->all($columns);
    }

    /**
     * Update a model
     *
     * @param $id
     * @param $data
     * @return bool|Model
     */
    public function update($id, $data)
    {
        if($model = $this->find($id)) {
            $model->update($data);

            return $model;
        }

        return false;
    }

    /**
     * Delete the model
     *
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        if($model = $this->find($id)) {
            return $model->delete();
        }

        return false;
    }

    /**
     * Fetch from cache
     *
     * @param $id
     * @return mixed|null
     */
    public function fetch($id)
    {
        if(!$this->cache()->has($id)) {
            return null;
        }

        return $this->cache()->get($id);
    }

    /**
     * Put data in the cache
     *
     * @param string $id The ID given to the stored data
     * @param mixed $data The data to be stored in the cache
     */
    public function remember($id, $data)
    {
        if($this->cache()->has($id)) {
            $this->cache()->forget($id);
        }

        $this->cache()->put($id, $data, 1440);
    }

    /**
     * Returns the
     * @return \Illuminate\Cache\TaggedCache
     */
    private function cache()
    {
        return $this->cache->tags($this->tag);
    }
}