<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {

        return view('home', ['trains' => Train::whereTime('orario_di_partenza', '=', '00:00:23')->get()]);
        return view('home');
    }
}
