<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Escaperoom;
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

     public function addLogicTest($id1, $id2)
    {
      //El id1 corresponde al id del escaperoom y el id2 al id de la prueba de logica
       $logictest=LogicTest::find($id2);
       $escaperoom=Escaperoom::find($id1);
       //$escaperoom=Escaperoom::where('name', $name)->first();

       $escaperoom->logictest()->attach($logictest);

       $escaperoom->save();

       return redirect()->route('logictestApi');
    }

    public function removeLogicTest($id1, $id2)
    {
       $logictest=LogicTest::find($id2);
       $escaperoom=Escaperoom::find($id1);

       $escaperoom->logictest()->detach($logictest);
      
       return redirect()->route('logictestApi');
    }
}
