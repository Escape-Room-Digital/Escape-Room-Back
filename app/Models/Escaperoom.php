<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escaperoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ]; 

    public function logictest() 
    {
        return $this->belongsToMany(LogicTest::class);
    }


}
