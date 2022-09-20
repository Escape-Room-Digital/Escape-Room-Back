<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Logictest;
use Illuminate\Http\Request;

class LogictestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       /*  $logictest = Logictest::find($id);
        return  $logictest; */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logictest = Logictest::find($id);
        
        /*  return view('editLogictest',compact('logictest')); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $logictest= Logictest::where('id', '=',$id)->update($request->all());
        return redirect()->route('logictestApi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $event =Logictest::find($id);
        $event->delete();

    }
}
