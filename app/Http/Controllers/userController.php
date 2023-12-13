<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class userController extends Controller
{
    public function form(){
        return view('form');
    }
    public function save(Request $request){
        print_r($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required',
        ]);

        $user = new Form();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();
        return redirect('/table');
    }

    public function table(){
        $userData = Form::all();
        $result = compact('userData');
        return view('table')->with($result);

    }
    public function edit($id){
        $userData = Form::find($id);
        $url = url('/edit/update')."/".$id;
        $result = compact("userData","url");
        return view("updateform")->with($result);
    }
    public function update(Request $request,$id){
        $userData = Form::find($id);
        $userData->name = $request["name"];
        $userData->email = $request["email"];
        $userData->password = $request["password"];
        $userData->save();
        return redirect("/table");
    }

    public function delete($id){
        $find = Form::find($id)->delete();
        return redirect("/table");
    }
}
