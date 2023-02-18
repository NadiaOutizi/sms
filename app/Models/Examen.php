<?php

namespace App\Models;

use App\Models\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Examen extends Model
{
    use HasFactory;
    protected $fillable=['id','date','module_id'];
     function stagiaires(){
        return $this->belongsToMany(Stagiaire::class, 'notes','stagiaires','examens');
    }
    function module(){
        return $this->belongsTo(Module::class);
    }
}
