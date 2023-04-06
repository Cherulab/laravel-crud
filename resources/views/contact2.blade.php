@extends('template.base')
@section('contenu')
    <br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Ubisoft</h4>
            <div class="card-body">
                @foreach ($customers as $customer)
                    <h1>{{$customer->contact_name}}</h1>
                    <p>{{$customer->phone}}</p>
                    <p>{{$customer->email}}</p>
                @endforeach
         
                <a href="{{ route('contact.custom_id_1') }}">Novanea Users</a>
              
            </div>
        </div>
    </div>
@endsection