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

    static function getLogicTestsOfEscaperoom($id) {
        $logicTestsOfEscaperoom = [];
        $escaperoom = Escaperoom::find($id);
        $logicTestsOfEscaperoom = $escaperoom->logictest;
        return $logicTestsOfEscaperoom;
    }
    /* static function getEventsOfUser() {
        $eventsOfUser = [];
        if (Auth::user()) {
            $user = Auth::user();
            $eventsOfUser = $user->event;
        }
        return $eventsOfUser;
    }

    public function eventsSubscribe()
    {
        $user = User::find(Auth::id());
        $user->event();
        return view('eventssubscribe', compact('user'));
    }


 */
}
