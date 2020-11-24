<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Carbon;
use App\Models\Multipic;

class MultiimageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    
    public function index() {

        $image = Multipic::all();
        // dd($image);
        return view('admin.port.index', compact('image'));
    }

    public function multiimage(Request $request) {
   
         $image = $request->file('image');

         foreach($image as $multy_image){
            $name_gen = hexdec(uniqid()).'.'.$multy_image->getClientOriginalExtension();
         Image::make($multy_image)->resize(300,300)->save('image/multy/'.$name_gen);
         $last_image = 'image/multy/'.$name_gen;   

         Multipic::insert([
            'image'=> $last_image,
            'created_at' =>Carbon::now()
             ]);
         }

         
        return redirect()->back()->with('message', 'image  successfully updated');
    }

    public function multidelete($id) {
        $image = Multipic::find($id);
        $old_image = $image->image;
        unlink($old_image);

        Multipic::find($id)->delete(); 
        return redirect()->back()->with('message', 'image delete successfully');

        
    }
}
