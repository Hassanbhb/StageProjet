<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\User;
use Session;

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

    public function addExp(Request $request)
    {
        $request->validate([
            'ville' => 'required',
            'langue' => 'required',
            'theme' => 'required',
            'description' => 'required',
            'duree' => 'required',
            'titre' => 'required',
            'prix' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $experience = new experience();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $exp_img = $file->storeAs('/exp_imgs', 'exp_img_' . time() . '.' . $file->getClientOriginalExtension(), 'public');
            $experience->image = "storage/" . $exp_img;
        }

        $experience->ville = $request->ville;
        $experience->langue = $request->langue;
        $experience->theme = $request->theme;
        $experience->description = $request->description;
        $experience->duree = $request->duree;
        $experience->titre = $request->titre;
        $experience->prix = $request->prix;
        $res = $experience->save();
        if ($res) {
            return back()->with('success', 'Enregister avec succès!');
            return redirect('voyages');
        } else {
            return back()->with('fail', 'Erreur lors de votre inscription!');
        }
    }
}
