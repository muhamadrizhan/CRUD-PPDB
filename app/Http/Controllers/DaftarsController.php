<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftars;

class DaftarsController extends Controller
{
    public function index()
    {
    	$daftars = Daftars::all();
    	dd($daftars);
    	//return view('Daftar.index', compact('daftars',('daftars'));
    }
}
