<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = Users::all();
        return view('welcome', compact('users'));
    }
}
