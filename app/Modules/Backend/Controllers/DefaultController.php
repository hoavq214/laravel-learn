<?php

namespace App\Modules\Backend\Controllers;

class DefaultController extends BackendControllers {

    public function __construct() {
        parent::__construct();
        $this->middleware('auth', [
            'except' => ['index']
        ]);
    }

    public function index() {
        echo route('backend::home');
        return view('Backend::default.index');
    }

}
