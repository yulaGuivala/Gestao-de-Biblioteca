<?php

namespace App\Http\Controllers;

use App\Models\user;

class userController extends Controller
{
    private $user;

    public function __construct() {
        $this->user= new User();
    }

    public function store(User $user)
    {
        try {
            $user->save();
        } catch (\Exception $e) {
            echo "<h3 style='color:red'>ERRO (UserController->save):</h3>" . $e->getMessage();
        }
        return $user->id;
    }


    public function update(User $user)
    {
        try {
            $user->update();
        } catch (\Exception $e) {
            echo "<h3 style='color:red'>ERRO (UserController->update):</h3>" . $e->getMessage();
        }
    }

    public function getUser($id) {
        return $this->user->find($id);
    }
    
    function login_admin(){

        return view('admin.login');
    }
}
