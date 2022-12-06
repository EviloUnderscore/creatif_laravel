<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, \App\Models\Projet;;

class ProjetsController extends Controller
{
    public function index() {
        return view('projets.index', [
            'projets' => Projet::orderBy('dateCreation', 'ASC')
            ->take(5)->get()
        ]);
    }

    public function show(Projet $projet){
        return view('projets.show', compact('projet'));
    }
}
