<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index(){
        $data = [
            ['name' => 'Quad a marrakech', 'prix' => 300, 'rating' => 4.5, 'duree' => '1 jour', 'type' => 'sport'],
            ['name' => 'Musée Agadir', 'prix' => 120, 'rating' => 3.2, 'duree' => '4 heurs', 'type' => 'art et culture'],
            ['name' => 'Camp a paradise', 'prix' => 600, 'rating' => 4, 'duree' => '4 jours', 'type' => 'nature et plain air']
        ];
    }
}
