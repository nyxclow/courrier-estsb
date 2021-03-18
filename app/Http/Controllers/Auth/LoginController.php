<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Illuminate\Support\Facades\Auth;
use App\User; 
use Auth;


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
    //protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        if(Auth::check() && Auth::user()->role_id == 1)
        {
            $this->redirectTo=route('admin.dashboard');
        }
        if(Auth::check() && Auth::user()->role_id == 2)
        {
            $this->redirectTo=route('gestionnaire.dashboard');
        }
        $this->middleware('guest')->except('logout');
    }*/
    public function redirectTo() {
        if(Auth::check()){
          $role_id = Auth::user()->role_id; 
          switch ($role_id) {
            case 1:
              return route('admin.dashboard');
              break;
            case 2:
              return route('gestionnaire.dashboard');
              break;
            case 3:
              return route('chef.dashboard');
              break;
            case 4:
              return route('membre.dashboard');
              break; 
        
         
        
            default:
              return '/home'; 
            break;
          }
        }
    }
}
