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
                
                @if($contacts->contact_id === 2)
                    {
                        @foreach ($customers as $customer)
                        <h1>{{$customer->contact_name}}</h1>
                        @endforeach 
                    }
                    @else{
                    <h1>Nothing</h1>
                    }
                @endif
             
                {{-- <a href="{{ route('contact.custom_id_2') }}">Ubisoft</a> --}}
                {{-- {{ route('films.create') }} --}}
                {{-- <form action="{{ route('contact.index') }}" method="GET">
                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-secondary">Envoyer !</button>
                </form> --}}
            </div>
        </div>
    </div>
@endsection