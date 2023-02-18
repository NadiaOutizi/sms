<?php

namespace App\Models;

use App\Models\Examen;
use App\Models\Stagiaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notes extends Model
{
    use HasFactory;
    protected $fillable =['id','stagiaire_id','examen_id','note'];
    public function stagiaire()
    {
        return $this->belongsTo(Stagiaire::class);
    }

    public function examen()
    {
        return $this->belongsTo(Examen::class);
    }
}


