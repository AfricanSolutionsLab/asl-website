<?php

namespace App\Http\Controllers;

use App\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $service=\App\Service::all();
        return view('commadez',['services'=>$service]);
    }
    
    public function store(Request $request){
        
    }
}
