<?php

namespace App\Modules\Backend\Controllers;

use App\Http\Controllers\Controller;

class BackendControllers extends Controller {

    public function __construct() {
//        $user = \Auth::user();
//        var_dump($user);
//        die;
//        $this->middleware('auth.admin');
    }

    public function index() {
        return view('Backend::default.index');
    }

}
