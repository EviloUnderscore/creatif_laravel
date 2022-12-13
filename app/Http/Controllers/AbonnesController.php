<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonne;

class AbonnesController extends Controller
{
    //
    public function store(Request $request)
    {
        $validated = $request->validate([
            'mail' => 'required|unique:abonnes|email',
        ]);

        Abonne::create(['mail' => $request->mail]);
        return view('abonnes.store');
    }
}
