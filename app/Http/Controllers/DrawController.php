<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrawController extends Controller
{
    // master draw method
    public function master()
    {
        return view('pages.draw.master');
    }

    // phlebotomist draw method
    public function phlebotomist()
    {
        return view('pages.draw.phlebotomist');
    }
}