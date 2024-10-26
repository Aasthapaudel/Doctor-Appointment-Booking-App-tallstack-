<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admindas(){
        return view('admin.dashboard');
    }
    public function doclist(){
        return view('livewire.doctor-list');
    }

}
