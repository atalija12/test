@extends('layouts.master')
@section('content')

    <div class="container my-3">
        <h1 class="bg-info text-center" >Podaci o korisniku</h1>
        <h3>{{ $korisnik->ime_prezime }}</h3>
        <h3><h3>{{ $korisnik->broj_telefona }}</h3></h3>
        <p>{{ $korisnik->adresa }}</p>
        
    </div>

@endsection
