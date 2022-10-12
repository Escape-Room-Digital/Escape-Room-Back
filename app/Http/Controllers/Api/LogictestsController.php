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


    public function store(Request $request)
    {
      $request->validate([
            'name'=>'required',
            'statement'=>'required',
            'question'=>'required',
            'correct'=> 'required',    
            'incorrect'=> 'required',
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

     public function addLogicTestToEscaperoom($id1, $idList)
    {
       $separator = ',';
       $id2 = explode($separator, $idList);
      $max= count($id2);
      $escaperoom=Escaperoom::find($id1);
      for($index = 0 ; $index < $max ; $index++ ){
        $id = $id2[$index];
        $logictest=LogicTest::find($id);
        $escaperoom->logictest()->attach($logictest);
       $escaperoom->save();
       }
       return redirect()->route('myLogicTestsInEscapeRoom', $id1);
    }

    public function removeLogicTestToEscaperoom($id1, $id2)
    {
       $logictest=LogicTest::find($id2);
       $escaperoom=Escaperoom::find($id1);

       $escaperoom->logictest()->detach($logictest);
      
       return redirect()->route('logictestApi');
    }
}
