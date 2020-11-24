<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Multipic;

class PortfolioController extends Controller
{
    public function index() {
        $images = Multipic::all();
        return view('pages.portfolio', compact('images'));
    }
}
