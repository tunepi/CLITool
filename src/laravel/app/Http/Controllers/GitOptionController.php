<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class GitOptionController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(Request $request)
    {
        return Inertia::render('GitOptionList');
    }
}
