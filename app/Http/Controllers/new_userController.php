<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class new_userController extends Controller
{
    //
    public function index(){
        return view ('pages.users.new_user');
    }
}
