<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;


    use HasFactory;

    protected $fillable = ['title', 'image'];

    public function recettes()
    {
        return $this->belongsToMany(Recette::class, 'category_recette');
    }
}
