<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recette extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'duration', 'difficulty', 'budget', 'image','ingredients'];

    public function etapes()
    {
        return $this->hasMany(Etape::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categorie::class, 'category_recette');
    }
}
