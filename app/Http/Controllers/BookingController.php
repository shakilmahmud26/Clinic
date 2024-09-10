<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    // list method
    public function list()
    {
        return view('pages.booking.list');
    }
}