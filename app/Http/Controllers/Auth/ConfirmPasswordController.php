<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. You're free to explore
    | this trait and override any functions that require customization.
    |
    */

    use ConfirmsPasswords;

    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = '/home';
    protected function redirectTo()
    {
        if (auth()->user()->role_id == 1) {
            return route('superadmin.dashboard');
        }elseif (auth()->user()->role_id == 2) {
            return route('admin.dashboard');
        } elseif (auth()->user()->role_id == 3) {
            return route('advanceteacher.dashboard');
        } elseif (auth()->user()->role_id == 4) {
            return route('basicteacher.dashboard');
        }else{
            return route('login');
        }


    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
