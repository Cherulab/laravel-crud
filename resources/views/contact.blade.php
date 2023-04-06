@extends('template.base')
@section('contenu')
    <br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Novanea</h4>
            <div class="card-body">
                @foreach ($contacts as $contact)
                    <h1>{{$contact->contact_name}}</h1>
                    <p>{{$contact->phone}}</p>
                    <p>{{$contact->email}}</p>
                    <p>{{$contact->customer_name}}</p>
                @endforeach
             
                <a href="{{ route('contact2.custom_id_2') }}">Ubisoft</a>
           
            </div>
        </div>
    </div>
@endsection