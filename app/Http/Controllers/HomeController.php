<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var UserRepository $users;
     */
    private $users;

    /**
     * @var Request $request;
     */
    private $request;

    /**
     * Create a new controller instance.
     *
     * @param Request $request
     * @param UserRepository $users
     */
    public function __construct(Request $request, UserRepository $users)
    {
        $this->request = $request;
        $this->users = $users;

        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home');
    }
}
