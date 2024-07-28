<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userlistes;

class UserController extends Controller
{
    public function index(){
        return view('.login');

    }
    
    public function connect(Request $request){
        $user = userlistes::where("EMAIL",$request->input('user_nom'))->first();
        if($user){
            $verification = userlistes::where("EMAIL",$request->input('user_nom'))->where("password",$request->input('password'));
            $admin = $verification->first();
            if($admin){
                
                session(['user_parent_id'=>$admin->PARENT_ID]);
                session(['user_telephone_number'=>$admin->TELEPHONE]);
                session(['user_email'=>$admin->EMAIL]);
                session(['user_name'=>$admin->NOM]);
                session(['user_id'=>$admin->id]);
                return redirect('/users');
                
            }else{
                return redirect('/')->with('status','Invalide password');

            }
        }else{
            return redirect('/')->with('status','User not existing');
        }
    }
    public function listeUser()
    {
        $userlistes = userlistes::paginate(4);
        return view('user.liste', compact('userlistes'));
    }
    public function addUser(){
        return view('user.add');

    }
    public function addUser_action(Request $request){
        $request->validate([
            'name' => 'required',
            'surname'  => 'required',
            'number'  => 'required',
            'age'  => 'required',

        ]);

        $user = new userlistes();
        $user->NAME = $request->name;
        $user->SURNAME = $request->surname;
        $user->NUMBER = $request->number;
        $user->AGE = $request->age;

        $user->save();

        return redirect('/add')->with('status','added user');

    }
    
    public function updateUser($id){
        $user = userlistes::find($id);
        return view('user.update',compact('user'));
    }
    public function updateUser_action(Request $request){
        
        $request->validate([
            'name' => 'required',
            'surname'  => 'required',
            'number'  => 'required',
            'age'  => 'required',

        ]);

        $user = userlistes::find($request->user_id);
        $user->NAME = $request->name;
        $user->SURNAME = $request->surname;
        $user->NUMBER = $request->number;
        $user->AGE = $request->age;

        $user->update();

        return redirect('/userlistes');
        
    }

    public function deleteUser($id){
        $user = userlistes::find($id);
        $user->delete();
        return redirect('/userlistes');

    }
}
