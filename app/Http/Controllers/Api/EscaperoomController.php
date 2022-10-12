<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Escaperoom;
use App\Models\Logictest;
use Illuminate\Http\Request;

class EscaperoomController extends Controller
{
    
    public function index()
    {
        $escaperooms=Escaperoom::all();

        return response()->json($escaperooms, 200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]); 
      return Escaperoom::create($request->all());
    }


    public function show($id)
    {
        $escaperoom[0] = Escaperoom::find($id);
        return  $escaperoom;
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
      $logicTestsOfEscaperoom = [];
        $escaperoom = Escaperoom::find($id);
        $logicTestsOfEscaperoom = $escaperoom->logictest;
      $escaperoom->logictest()->detach($logicTestsOfEscaperoom);
        $escaperoom->delete();
    }

    public function myLogicTestsInEscapeRoom($id){
      $logictestsInEscaperoom= Escaperoom::getLogicTestsOfEscaperoom($id);
      return $logictestsInEscaperoom;
    }

  
}
