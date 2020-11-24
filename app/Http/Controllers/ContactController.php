<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Carbon;
use App\Models\Contact;
use App\Models\Contactform;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{
    public function admincontact() {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function adminaddcontact() {
        return view('admin.contact.create');
    }

    public function adminstorecontact (Request $request) {

        Contact::insert([
            'address' => $request->address,
            'email'=> $request->email,
            'phone' => $request->phone,
            'created_at' =>Carbon::now()
        ]);
        return redirect()->route('contact.admin')->with('message', 'Address deatils save successfully');
    }

    public function homeindex() {
        $contacts = DB::table('contacts')->first();
        return view('pages.contact', compact('contacts'));
    }


    public function deletecontact($id) {
        Contact::find($id)->delete(); 
        return redirect()->route('contact.admin')->with('message', 'vontact delete successfully');
    }

    public function updatecontact(Request $request, $id) {
        Contact::find($id)->update([
            'address' => $request->address,
            'email'=> $request->email,
            'phone' => $request->phone,
        ]);
        return redirect()->route('contact.admin')->with('message', 'Contact updated successfully');
    }

    public function editcontact($id) {
        $contacts = Contact::find($id);
        return view('admin.contact.edit',compact('contacts'));
    }


    public function formcontact(Request $request) {
        Contactform::insert([
            'name' => $request->name,
            'email'=> $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' =>Carbon::now()
        ]);
        return redirect()->route('contact')->with('message', 'mail send  successfully');
    }

    public function contactmessage() {
        $messages = Contactform::all();
        return view('admin.contact.message',compact('messages'));
    }

    public function cmessagedelete($id) {
        Contactform::find($id)->delete(); 
        return redirect()->route('contact.message')->with('message', 'contact messages delete successfully');
    }

    public function viewmessage($id) {
        $messages = Contactform::find($id);
        return view('admin.contact.messageveiw',compact('messages'));
    }
}
