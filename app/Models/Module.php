<?php

namespace App\Models;

use App\Models\Examen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;
    protected $fillable=['id','Libelle_module'];
    public function Examen(){
        return $this->hasMany(Examen::class);
    }
   
}
