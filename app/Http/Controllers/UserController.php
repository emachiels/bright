<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    private $users;

    public function __construct(Request $request, UserRepository $users)
    {
        parent::__construct($request);

        $this->users = $users;
    }

    public function listUsers()
    {
        return view('backend.users.list', ['users' => $this->users->all()]);
    }
}
