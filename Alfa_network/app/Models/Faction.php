<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faction extends Model
{
    protected $fillable = ['name', 'location', 'description'];
    
    /** @use HasFactory<\Database\Factories\FactionFactory> */
    use HasFactory;

    public function characters() {
        return $this->hasMany(Characters::class);
    }
}
