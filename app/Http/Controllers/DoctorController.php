<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //\
    public function docdas(){
    return view('doctor.dashboard');
}
    public function doclist(){
    return view('livewire.dashboard');
}
}
