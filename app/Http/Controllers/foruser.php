<?php

namespace App\Http\Controllers;
use \App\Models\Room;

use Illuminate\Http\Request;

class foruser extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function akomodasi()
    {
        $data = Room::orderBy('created_at','desc')->paginate(4);
        return view('akomodasi',compact('data'));
    }
    public function galeri()
    {
        return view('galeri');
    }
    public function kontak()
    {
        return view('kontak');
    }
}
