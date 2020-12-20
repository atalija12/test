@extends('layouts.master')
@section('content')

    <div class="container">
        
         @if ($errors->any())
         @foreach ($errors->all() as $error)
             <div class="alert-danger">{{ $error }}</div>
         @endforeach

         @endif

         <form action={{ route('update') }} method="POST" enctype="multipart/form-data">
             @csrf
             <input type="hidden" name="id" value="{{ $korisnik->id }}">

             
             

             <div class="form-group">
                <label for="ime_prezime">Ime i prezime</label>
                <input type="text" name="ime_prezime"  class="form-control" value="{{  $korisnik->ime_prezime }}">
            </div>
             
             <div class="form-group">
               <label for="broj_telefona">Broj telefona</label>
               <input type="integer" name="broj_telefona"  class="form-control" value="{{ $korisnik->broj_telefona }}">
           </div>
           
            <div class="form-group">
                <label for="adresa">Adresa</label>
                <textarea  name="adresa"  class="form-control">{{ $korisnik->adresa }}</textarea>
            </div>
            
            <div class="form-group">
               <label for="grad">Grad</label>
               <input type='string' name="grad"  class="form-control" value="{{ $korisnik->grad }}">
           </div>


           <div class="form-group">
               <label for="datum_rodjena">Datum rodjena</label>
               <input type="date" name="datum_rodjena"  class="form-control" value="{{ $korisnik->datum_rodjena }}">
           </div>






               <input type="submit" value="Snimi">
         </form>
    </div>

@endsection
