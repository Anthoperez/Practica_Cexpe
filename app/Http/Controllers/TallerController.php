<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallerController extends Controller
{
    public function index()
    {
        $talleres = ['Danza', 'Baile', 'Oratoria', 'Liderazgo'];
        return view('talleres', compact('talleres'));
    }

    public function show($taller)
    {
        $talleres = ['Danza', 'Baile', 'Oratoria', 'Liderazgo'];
        if (in_array($taller, $talleres)) {
            return view('taller', ['taller' => $taller]);
        }
        abort(404);
    }
}