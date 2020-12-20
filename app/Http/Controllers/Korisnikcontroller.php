<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Korisnik;

class Korisnikcontroller extends Controller
{
    public function index() {
        $korisnici = Korisnik::all();
        return view('korisnici.index', compact('korisnici'));
    }

    public function show($id) {
        $korisnik = Korisnik::find($id);
        return view('korisnik.show', compact('korisnik'));
    }

    public function create() {
        return view('korisnik.create');
    }

    public function store(Request $request) {
        
        $rules = [
            'ime' => 'required',
            'odsjek' => 'required',
            'biografija' => 'required',
            'image' => 'required'
        ];


        $request->validate($rules);

      

    
        Korisnik::create([
            'ime_prezime' => $request->ime_prezime,
            'broj_telefona' => $request->string,
            'adresa' => $request->textarea,
            ,
            
            'user_id' => 1
        ]);

        return redirect()->route('index');
    }

    public function edit($id) {
    $korisnik = Korisnik::find($id);
        return view('korisnik.edit', compact('korisnik'));
    }

    public function update(Request $request) {
        Korisnik::where('id', $request->id)->update($request->except(["_token"]));
        return redirect()->route('index');
    }

    public function delete($id) {
        Korisnik::find($id)->delete();
        return redirect()->route('index');
    }


}
