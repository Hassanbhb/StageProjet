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

    public function create()
    {
        return view("cree");
    }
}
