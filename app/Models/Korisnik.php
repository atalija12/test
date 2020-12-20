<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korisnik extends Model
{
    use HasFactory;

    public $table = 'korisnici';
    public $fillable = ['ime_prezime','broj_telefona', 'adresa','grad','datum_rodjena'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}
