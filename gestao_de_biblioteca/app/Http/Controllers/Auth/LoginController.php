<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
Use App\Models\funcionario;
use App\Models\user;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }

    public function login(Request $req){

        $lista = user::all();
        $lista2 = funcionario::all();
        
        
        foreach ($lista2 as $ft) {
           

            foreach ($lista as $func){
               
                // $func = $this->funcionario->user();
                //echo decrypt($func->password);
                //echo $func->password;&& $req->senha == decrypt($func->password)
                if ($func->id == $ft->user_id) {
                    
                    if ($req->nome == $func->name || $req->nome == $func->email){
                    
                        if ($req->senha == $func->password) {
                            return redirect('/sgb-admin/usuarios/funcionario')->with('mensagem', 'Login efectuado com sucesso!');
                            break;
                        } else {
                            # code...
                            return redirect('/sgb-admin/usuarios/login');
                        }
         
                    }
                } 
                
            }

            
        }
        
        return; 
     

    }
}
