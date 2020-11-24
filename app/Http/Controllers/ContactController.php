<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Carbon;
use App\Models\Contact;

class ContactController extends Controller
{
    public function admincontact() {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }
}
