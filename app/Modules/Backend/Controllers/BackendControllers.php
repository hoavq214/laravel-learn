<?php

namespace App\Modules\Backend\Controllers;

use App\Http\Controllers\Controller;

class BackendControllers extends Controller {

    public function __construct() {
        $this->middleware('auth.admin');
    }

    public function index() {
        return view('Backend::default.index');
    }

}
