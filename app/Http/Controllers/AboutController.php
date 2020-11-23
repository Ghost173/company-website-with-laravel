<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeAbout;
use Illuminate\Support\Carbon;

class AboutController extends Controller
{
    public function index() {
        $homeabouts = HomeAbout::latest()->get();
        return view('admin.about.index', compact('homeabouts'));
    }


    public function addabout() {
        return view('admin.about.create');
    }

    public function storeslider(Request $request) {
        HomeAbout::insert([
            'title' => $request->title,
            'short_dis'=> $request->short_dis,
            'long_dis' => $request->long_dis,
            'l1' => $request->l1,
            'l2' => $request->l2,
            'l3' => $request->l3,
            'created_at' =>Carbon::now()
        ]);
        return redirect()->route('home.about')->with('message', 'about details added successfully');
    }

    public function editabout($id) {
        $about = HomeAbout::find($id);
        // dd($brands);
        return view('admin.about.edit', compact('about'));
    }

    public function updateabout(Request $request, $id) {
        HomeAbout::find($id)->update([
            'title' => $request->title,
            'short_dis'=> $request->short_dis,
            'long_dis' => $request->long_dis,
            'l1' => $request->l1,
            'l2' => $request->l2,
            'l3' => $request->l3,
        ]);
        return redirect()->route('home.about')->with('message', 'About updated successfully');
    }

    public function deleteabout($id) {
        HomeAbout::find($id)->delete(); 
        return redirect()->route('home.about')->with('message', 'About delete successfully');
    }
}
