<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() { return view('welcome'); }
    public function user($id) { return view('user', compact('id')); }
    public function article($title,$comment){return view ('article', compact('title', 'comment'));}
}
