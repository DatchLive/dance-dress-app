<?php

namespace App\Http\Controllers;

use App\Models\Dress;
use Illuminate\Http\Request;

class DressController extends Controller
{
    public function index()
    {
        $dresses = Dress::all();
        return view('dress.index', ['dresses' => $dresses]);
    }
}
