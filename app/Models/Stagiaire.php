<?php

namespace App\Models;

use App\Models\Groupe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stagiaire extends Model
{
    use HasFactory;
    protected $fillable=["id","nom","prenom","genre","adresse","age","telephone","image","groupes_id"];
    function groupe(){
        return $this->belongsTo(Groupe::class);
    }
    function examens(){
    return $this->belongsToMany(Examen::class, 'notes','stagiaires','examens');
    }
}
