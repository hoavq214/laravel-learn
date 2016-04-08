<?php

namespace App\Modules\Backend\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Controllers\Auth\AuthController as FrontAuthController;

class AuthController extends FrontAuthController {

    protected $loginView = 'Backend::auth.login';

    use AuthenticatesAndRegistersUsers,
        ThrottlesLogins;

    protected $redirectTo = '/';
    
    public function __construct() {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin() {
        return $this->showLoginForm();
    }
    
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|confirmed|min:6',
        ]);
    }
    
    protected function create(array $data) {
        return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
        ]);
    }

}
