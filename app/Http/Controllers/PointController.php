<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class PointController extends Controller
{
    private $users;

    public function __construct(UserRepository $users, Request $request)
    {
        parent::__construct($request);

        $this->users = $users;
    }

    public function getGiveBright($id)
    {
        if($user = $this->users->find($id)) {
            return view('backend.users.givebright', ['user' => $user]);
        }
        else {
            return 'Gebruiker bestaat niet';
        }
    }

    public function postGiveBright($id)
    {
        if($user = $this->users->find($id)) {
            $user
                ->giveBright($this->request->get('amount'))
                ->save();
        }

        return redirect()->back();
    }
}
