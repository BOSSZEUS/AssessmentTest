<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class ApiController extends Controller
{
    // function to POST a new user
    public function create(Request $request){
        $users = new Users();

        $users->fname = $request->input('fname');
        $users->lname = $request->input('lname');
        $users->email = $request->input('email');
        $users->password = $request->input('password');

        $users->save();
        return response()->json($users);
    }
    // function to GET all users
    public function show(){
        $users = Users::all();
        return response()->json($users);
    }
    // function to GET users by id
    public function showById($id){
        $users = Users::find($id);
        return response()->json($users);
    }

    // function to UPDATE users
    public function update(Request $request, $id){
        $users = Users::find($id);
        $users->fname = $request->input('fname');
        $users->lname = $request->input('lname');
        $users->email = $request->input('email');
        $users->password = $request->input('password');

        $users->save();
        return response()->json($users);
    }
    // function to delete by id
    public function delete(Request $request, $id){
        $users = Users::find($id);

        $users->delete();
        return response()->json($users);
    }

}
