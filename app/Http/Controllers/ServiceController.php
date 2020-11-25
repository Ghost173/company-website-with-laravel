<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index () {

     $services = Service::first();
    // $services = DB::table('services')->get();
    return view('admin.services.index',compact('services'));
    }

    public function store (Request $request) {
        Service::insert([
            'mtitle' => $request->mtitle,
            'ctitle1' => $request->ctitle1,
            'ctitle2' => $request->ctitle2,
            'ctitle3' => $request->ctitle3,
            'ctitle4' => $request->ctitle4,
            'ctitle5' => $request->ctitle5,
            'ctitle6' => $request->ctitle6,
            'cdsc1' => $request->cdsc1,
            'cdsc2' => $request->cdsc2,
            'cdsc3' => $request->cdsc3,
            'cdsc4' => $request->cdsc4,
            'cdsc5' => $request->cdsc5,
            'cdsc6' => $request->cdsc6,
        ]);

        $notificaton = array(
            'message' => 'barnd successfully updated',
            'alert-type' => 'success' 
        );
        return redirect()->route('service.view')->with($notificaton);
    }


    public function update(Request $request, $id) {
        Service::find($id)->update([
            'mtitle' => $request->mtitle,
            'ctitle1' => $request->ctitle1,
            'ctitle2' => $request->ctitle2,
            'ctitle3' => $request->ctitle3,
            'ctitle4' => $request->ctitle4,
            'ctitle5' => $request->ctitle5,
            'ctitle6' => $request->ctitle6,
            'cdsc1' => $request->cdsc1,
            'cdsc2' => $request->cdsc2,
            'cdsc3' => $request->cdsc3,
            'cdsc4' => $request->cdsc4,
            'cdsc5' => $request->cdsc5,
            'cdsc6' => $request->cdsc6,
           
        ]);
        $notificaton = array(
            'message' => 'barnd successfully updated',
            'alert-type' => 'success' 
        );
        return redirect()->route('service.view')->with($notificaton);
    }
}
