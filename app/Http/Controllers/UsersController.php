<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function store(Request $request)
    {
        return 'Le nom est ' . $request->input('nom');
    }
    public function create()
    {
        return view('info');
    }
}
