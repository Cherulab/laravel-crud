<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function custom_id_1()
    {
        $contacts = Contact::all()->where('customer_id', 1);
        
 
        return view('contact', ['contacts' => $contacts]);
    }
    
    public function custom_id_2()
    {
     
        $customers = Contact::all()->where('customer_id', 2);
 
        return view('contact2', ['customers' => $customers]);
    }
    // public function create()
    // {
    //     return view('contact');
    // }
 
    public function store(Request $request)
    {
        
        // Methode create qui remplace l'ancienne methode -> Model contact
        // Par sécurité ce type d’assignement de masse (on transmet directement 
        // un tableau de valeurs issues du client avec la méthode create
        dd(\App\Models\Contact::create ($request->all ()));
        return "C'est bien enregistré !";
    }
}
