<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class UserController extends Controller
{
    /**
     * ユーザ一覧の表示
     *
     * @return void
     */
    public function index()
    {
        return Inertia::render('User/UserList',[
            'users' => User::all()
        ]);
    }
}
