<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;


class ChangePassController extends Controller
{
    public function changepassword() {
        
        return view('admin.user.chnage_password');
    }

    public function updatepassword(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',

        ]);


        $haspassword = Auth::user()->password;
        if(Hash::check($request->oldpassword, $haspassword)) {
            $user = User::find(Auth::id());

            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            return redirect()->route('login')->with('message' ,'password update success');
        }else {
            return redirect()->back()->with('error' ,'password update fail');
        }
    }



    public function profileupdate() {
        if(Auth::user()) {
            $user = User::find(Auth::user()->id);
            if($user) {
                return view('admin.user.updateprofile',compact('user'));
            }
        }
    }


    public function saveprofile(Request $request) {
        
           $user = User::find(Auth::user()->id);
           if($user) {
            //    dd($user);
               $user->name = $request->name;
               $user->email = $request->email;
               $user->save();

               return redirect()->back()->with('message', 'your profile is updated');
           }else {
            return redirect()->back()->with('error', ' profile  update fail');
           }

    }
}
