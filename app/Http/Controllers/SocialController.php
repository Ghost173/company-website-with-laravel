<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sociallinks;
use Illuminate\Support\Facades\DB;

class SocialController extends Controller
{
    public function index () {
        $social = Sociallinks::first();
        return view('admin.social.index',compact('social'));
        
    }


    public function store(Request $request) {
        Sociallinks::insert([
            'fb' => $request->fb,
            'ins' => $request->ins,
            'ln' => $request->ln,
            'tw'  => $request->tw,
        ]);
        $notificaton = array(
            'message' => 'Social details updated successfully',
            'alert-type' => 'success' 
        );
        return redirect()->route('social.view')->with($notificaton);
    }


    public function undate(Request $request, $id){
        Sociallinks::find($id)->update([
            'fb' => $request->fb,
            'ins' => $request->ins,
            'ln' => $request->ln,
            'tw'  => $request->tw,
        ]);
        $notificaton = array(
            'message' => 'Social details updated successfully',
            'alert-type' => 'success' 
        );
        return redirect()->route('social.view')->with($notificaton);
    }
}
