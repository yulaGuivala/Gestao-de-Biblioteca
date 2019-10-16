<?php

namespace App\Http\Controllers;

use App\Models\user;

class userController extends Controller
{
    function store(User $user)
    {
        try {
            $user->save();
           // echo $user->id;
        } catch (\Exception $e) {
            echo "<h3 style='color:red'>ERRO:</h3>" . $e->getMessage();
        }
        return $user->id;
    }

    function login_admin(){

        return view('admin.login');
    }
}
