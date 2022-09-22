<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        $users=User::all();

        return response()->json($users, 200);
    }

    
   /*  public function create()
    {
        return view('createuser');
    } */

    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'promo'=>'required',
            'solution'=>'required',
            'testdone'=>'required',
            'password'=>'required',
        ]); 
      return User::create($request->all()); 
   
    }


    public function show($id)
    {
        $user[0] = User::find($id);
        return  $user;
    }


    public function edit($id)
    {
        $user = User::find($id);
        
        /* return view('usertest',compact('user')); */
    }


     public function update(Request $request, $id)
    {
        $user= User::where('id', '=',$id)->update($request->all());
        return redirect()->route('userApi');
        /* $user = User::find($id);

        $user->name= $request->name;
        $user->phone= $request->phone;
        $user->email= $request->email;
        $user->promo= $request->promo;
        $user->solution= $request->solution;
        $user->testdone= $request->testdone;
        

        $user->save();

        return redirect()->route('userApi'); */

    } 

    public function destroy($id)
    {
        $user =User::find($id);
        $user->delete();
    }
}
