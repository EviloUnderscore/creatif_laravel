<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, \App\Models\Projet;;

class ProjetsController extends Controller
{
    public function index() {
        return view('projets.index', [
            'projets' => Projet::orderBy('dateCreation', 'ASC')
            ->take(20)->get()
        ]);
    }

    public function show(int $id){
        return view('projets.show', [
            'projet' => Projet::find($id)
        ]);
    }
}
