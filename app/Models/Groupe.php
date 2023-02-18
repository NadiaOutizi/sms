<?php

namespace App\Models;

use App\Models\Filiere;
use App\Models\Stagiaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Groupe extends Model
{
    use HasFactory;
    protected $fillable = [ "id", "intitule", "Annee","filiere_id" ];
    function stagiaire(){
        return $this->hasMany(Stagiaire::class);
}
    function  filliere(){
        return $this->belongsTo(Filiere::class);
    }
}