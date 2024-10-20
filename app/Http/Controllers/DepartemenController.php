<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    public function index()
    {
        $data = Departemen::all();
        return view('departemen.index', compact('data'));
    }
}
