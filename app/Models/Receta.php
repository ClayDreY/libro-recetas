<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    public function ingredientes() {
        return $this->belongsToMany(Ingrediente::class, 'ingrediente_recetas');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
