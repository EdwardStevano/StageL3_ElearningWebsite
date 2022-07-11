<?php

namespace App\Http\Controllers;

class MyController extends controller{
    public function index(){
        $table = [
            'Essai1',
            'Essai2'
        ];

        return view('essai', compact('table'));
    }
}