<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Escaperoom;
use App\Models\Logictest;
use Illuminate\Http\Request;

class EscaperoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escaperooms=Escaperoom::all();

        return response()->json($escaperooms, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]); 
      return Escaperoom::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $escaperoom[0] = Escaperoom::find($id);
        return  $escaperoom;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /* $logictest[0] = Logictest::find($id);
        return  $logictest; */

    /* public function myEventsView()
    {
        $eventsOfUser = User::getEventsOfUser();

        $eventsOfUser = Event::getTotalUsersOfEvent($eventsOfUser);

        return view('myEvents', compact('eventsOfUser'));
    } */

   
}
