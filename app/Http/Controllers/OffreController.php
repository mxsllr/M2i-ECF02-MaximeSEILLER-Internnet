<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffreController extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
                'domaine' => 'required|string',
                'titre' => 'required|string',
                'description' => 'required|string',
                'localisation' => 'required|string',
                'company_id' => 'required|int',
                'email' => 'required|string'
            ]
        );
        Offre::create([
            'domaine' =>$request->input('domaine'),
            'titre' =>$request->input('titre'),
            'description' =>$request->input('description'),
            'localisation' =>$request->input('localisation'),
            'company_id' => $request->input('company_id'),
            'email' => $request->input('email')
        ]);
        $target = Offre::where('company_id', Auth::id());

        return redirect()->route('offre.mesannonces', compact('target'));
    }
    public function create(){
        return view('offres.offreform');
    }
    public function index(){
        $offres = Offre::all();

        return view('offres.offreindex', compact('offres'));
    }
    public function show($id){
        $offre = Offre::find($id);

        return view('offres.offredetails', compact('offre'));

    }
    public function edit($id){
        $offres = Offre::findorFail($id);
            return view('offres.offreedit', compact('offres'));
    }
    public function yours(){
        $offres = Offre::where('company_id', Auth::id())->get();
        return view('offres.offremesannonces', compact('offres'));
    }


}
