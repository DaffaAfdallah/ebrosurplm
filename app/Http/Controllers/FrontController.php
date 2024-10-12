<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Mitra;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        $alumnis = Alumni::orderByDesc('id')->paginate(9);
        $mitras = Mitra::orderByDesc('id')->paginate(10);
        return view('front.index', compact('alumnis', 'mitras'));
    }
}
