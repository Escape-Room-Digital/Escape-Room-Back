<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logictest extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'statement',
        'question',
        'result',
        'clue',
        'image',
    ]; 

    public function escaperoom() {
        return $this->belongsToMany(Escaperoom::class);
    }

}
