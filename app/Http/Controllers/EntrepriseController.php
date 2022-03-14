<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function index(){
        $entreprises = Entreprise::with('quartier')->get();
        return view('entreprise.index',['entreprises'=>$entreprises]);
    }
    public function create(){
        $quartiers = Quartier::all();
        return view('entreprise.create',['quartiers'=>$quartiers]);
    }
    public function store(Request $request){
        Entreprise::create($request->all());
        return redirect()->route('entreprises.liste');
    }
}
