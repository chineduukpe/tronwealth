<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// MODELS
use App\Models\User;

class UsersController extends Controller
{
    //
    public function index(){
        $users = User::orderBy('created_at','DESC')->paginate(10);
        return view('admin.users',compact('users'));
    }
}
