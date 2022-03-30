<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();

        return view('voyages', ['exps' => $experiences]);
    }

    public function filter(Request $req)
    {
        $filtered_theme = strtolower($req->input('filter'));
        if ($filtered_theme == 'all') {
            return redirect('/voyages');
        }
        $experiences = Experience::all()->where('theme', '=', $filtered_theme);
        return view('voyages', ['exps' => $experiences]);
    }

    public function show($id)
    {
        $exp = Experience::findOrFail($id);

        return view('details', ['exp' => $exp]);
    }

    public function create(Request $request)
    {

        $request->validate([
            'ville' => 'required',
            'langue' => 'required',
            'theme' => 'required',
            'description' => 'required',
            'duree' => 'required',
            'titre' => 'required',
            'prix' => 'required'
        ]);

        error_log("here");
        error_log($request);

        $exp = new Experience();
        $exp->titre = $request->titre;
        $exp->ville = $request->ville;
        $exp->description = $request->description;
        $exp->theme = $request->theme;
        $exp->duree = $request->duree;
        $exp->prix = $request->prix;
        $exp->images = "";
        $exp->inclus = "";

        $res = $exp->save();

        if ($res) {

            return redirect('voyages');
        } else {
            return back()->with('fail', 'Erreur lors de votre creation!');
        }
    }
}
