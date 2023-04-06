@extends('template.base')
 
@section('contenu')
    <form action="{{ url('company') }}" method="POST">
        @csrf
        <label for="name">Entrez votre company : </label>
        <input type="text" name="name" id="nom">
        <input type="submit" value="Envoyer !">
    </form>
@endsection