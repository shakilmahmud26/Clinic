<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    //list method
    public function list(){
        return view('pages.patient.list');
    }

    //add method
    public function add(){
        return view('pages.patient.add');
    }

    //edit method
    public function edit(){
        return view('pages.patient.edit');
    }

    //update method
    public function update(){
        return view('pages.patient.update');
    }

    //delete method
    public function delete(){
        return view('pages.patient.delete');
    }
}