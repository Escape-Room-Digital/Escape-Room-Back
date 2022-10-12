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
    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'statement'=>'required',
            'result'=>'required',
        ]); 
      return Codeeditor::create($request->all());
    }

    
    public function show($id)
    {
        $codeeditor[0] = Codeeditor::find($id);
        return  $codeeditor;
    }


    public function edit($id)
    {
        $codeeditor = Codeeditor::find($id);
    }

    
    public function update(Request $request, $id)
    {
        $codeeditor= Codeeditor::where('id', '=',$id)->update($request->all());
        return redirect()->route('codeeditorApi');
    }

    
    public function destroy($id)
    {
        $codeeditor =Codeeditor::find($id);
        $codeeditor->delete();
    }
}
