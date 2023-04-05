<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
 
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'bail|required|email',
            'message' => 'bail|required|max:500'
        ]);
        // Methode create qui remplace l'ancienne methode -> Model contact
        // Par sécurité ce type d’assignement de masse (on transmet directement 
        // un tableau de valeurs issues du client avec la méthode create
        dd(\App\Models\Contact::create ($request->all ()));
        return "C'est bien enregistré !";
    }
}
