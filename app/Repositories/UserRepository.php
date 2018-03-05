<?php
/**
 * Created by PhpStorm.
 * User: emach
 * Date: 20/02/2018
 * Time: 22:50
 */

namespace App\Repositories;


use App\Models\User;

class UserRepository extends Repository
{

    protected $tag = 'users';

    public function getModel()
    {
        return new User();
    }

    /**
     * Fetch the user by username
     *
     * @param $username
     * @return null
     */
    public function byUsername(string $username)
    {

        $result = $this->model->where('name', '=', $username)->get();

        if($result) {
            return $result->first();
        }

        return null;
    }
}