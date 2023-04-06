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
    public function company()
    {
        return view('company');
    }
    public function company_store(Request $request)
    {
        // Film::create($filmRequest->all());
        // return redirect()->route('films.index')->with('info', 'Le film a bien été créé');
    }
}
