<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instalation;

class InstalationsController extends Controller
{

    public function index(){
        $instalations = Instalation::all();
        return view("instalations.instalations_view");
    }

    public function create(){
        
    }


}
