<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    public function patdas(){
        return view('patient.dashboard');
    }
}
