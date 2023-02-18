<?php

namespace App\Models;


use App\Models\Groupe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Filiere extends Model
{
    use HasFactory;
    protected $fillable=['id','Libelle_Filliere','groupes_id'];
    function Groupe(){
        return $this->hasMany(Groupe::class);
    }
} 
