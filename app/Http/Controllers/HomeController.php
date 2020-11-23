<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Image;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    

    public function homeslider () {
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }


    public function addslider() {
        return view('admin.slider.create');
    }

    public function storeslider(Request $request) {
        // $this->validate($request, [
           
        //     'image'=>'required|mimes:jpg,jpeg,png',
        // ]);
     


         $slider = $request->file('image');            
         $name_gen = hexdec(uniqid()).'.'.$slider->getClientOriginalExtension();
         Image::make($slider)->resize(1920,1088)->save('image/slider/'.$name_gen);
         $last_image = 'image/slider/'.$name_gen;   

         Slider::insert([
            'title' => $request->title,
            'dec'=> $request->dec,
            'image' =>$last_image,
            'created_at' =>Carbon::now()
        ]);
        return redirect()->route('home.slider')->with('message', 'barnd successfully');
    }


    public function deleteslider($id) {
        $imagedelet = Slider::find($id);
        $old_image = $imagedelet->image;
        unlink($old_image);

        Slider::find($id)->delete(); 
        return redirect()->route('home.slider')->with('message', 'slider delete successfully');
    }


    public function editlider($id) {
        $sliders = Slider::find($id);
        //  dd($sliders);
        return view('admin.slider.edit', compact('sliders'));
    }

    public function updateslider(Request $request , $id) {
        $image = $request->file('image');
        if($image) {
            $old_image = $request->old_image;
            $slider_image = $request->file('slider_image');
            $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
                Image::make($slider_image)->resize(1920,1088)->save('image/slider/'.$name_gen);
                $last_image = 'image/slider/'.$name_gen;
    
                unlink($old_image);
        
                Slider::find($id)->update([
                    'title' => $request->title,
                    'dec'=> $request->dec,
                    'image' =>$last_image
                ]);
                return redirect()->back()->with('message', 'barnd updated successfully');
        }else {
            Slider::find($id)->update([
                'title' => $request->title,
                'dec'=> $request->dec,
               
            ]);
            return redirect()->back()->with('message', 'barnd updated successfully');
        }
      
    }
}
