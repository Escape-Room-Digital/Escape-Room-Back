<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Logictest;
use Illuminate\Http\Request;

class LogictestsController extends Controller
{
    
    public function index()
    {
        
        $logictests=Logictest::all();

        return response()->json($logictests, 200);
    }

    
    // public function create()
    // {
    //   return view('createlogictest');
    // }

    public function store(Request $request)
    {
      $request->validate([
            'name'=>'required',
            'statement'=>'required',
            'question'=>'required',
            'result'=>'required',
            'clue'=>'required',
            'image'=> 'required',
        ]); 
      return Logictest::create($request->all());
    }

   
    public function show($id)
    {
        $logicTest = [];
        $logictest[0] = Logictest::find($id);
        return  $logictest;
    }

   
    public function edit($id)
    {
        $logictest = Logictest::find($id);
        
        /*  return view('editLogictest',compact('logictest')); */
    }

    
    public function update(Request $request, $id)
    {
       
        $logictest= Logictest::where('id', '=',$id)->update($request->all());
        return redirect()->route('logictestApi');

    }

    
    public function destroy($id)
    {
        
        $logictest =Logictest::find($id);
        $logictest->delete();

    }
}
