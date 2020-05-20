<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller {
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
     * Override:: definisce la homepage per i diversi utenti.
     *
     * @var string
     */
    protected function redirectTo() {
        $role = auth()->user()->privilegio;
        switch ($role) {
            case 'admin': return '/admin';
                break;
            case 'cliente': return '/';
                break;
            case 'staff': return '/staff';
            default: return '/';
        };
    }

    /**
     * Override:: Login con 'username' al posto di 'email' in modo da rispettare le condizioni del progetto.
     *
     */
    public function username() {
        return 'username';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout'); //non c'è la possibilità di logout di un utente non loggato
    }

}
