<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home ()
    {
 		return view('welcome');
    }

    public function actors ()
    {
 		return view('actors');
    }

    public function films ()
    {
 		return view('films');
    }

    public function reviews ()
    {
 		return view('reviews');
    }
}