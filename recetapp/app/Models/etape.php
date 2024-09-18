<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\recette ;
class etape extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'name','order', 'recette_id'];

    public function recette()
    {
        return $this->belongsTo(recette::class);
    }
}
