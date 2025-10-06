<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id'=>1,'name'=>'Alice'],
            ['id'=>2,'name'=>'Bob'],
        ];
        return view('admin.users.index', compact('users'));
    }

    public function show($id)
    {
        $user = ['id'=>$id,'name'=>"User {$id}"];
        return view('admin.users.show', compact('user'));
    }
}
