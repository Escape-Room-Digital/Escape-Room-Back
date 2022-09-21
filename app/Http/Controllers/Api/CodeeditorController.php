<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Codeeditor;
use Illuminate\Http\Request;

class CodeeditorController extends Controller
{
    
    public function index()
    {
        $codeeditors=Codeeditor::all();

        return response()->json($codeeditors, 200);
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
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

    
    public function destroy($id)
    {
        $codeeditor =Codeeditor::find($id);
        $codeeditor->delete();
    }
}
