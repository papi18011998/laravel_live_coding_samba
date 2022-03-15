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
    public function show(Entreprise $entreprise){
        return view('entreprise.show',compact('entreprise'));
    }
    public function delete(Entreprise $entreprise){
            $entreprise->delete();
            return redirect()->route('entreprises.liste');
    }
    public function show_related($id){
        $quartier = Quartier::findOrFail($id);
        return view('entreprise.by_quartier',['quartier'=>$quartier]);
    }
}
