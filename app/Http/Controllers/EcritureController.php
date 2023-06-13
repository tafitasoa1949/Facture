<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EcritureController extends Controller
{
    //
    public function checkEcriture($numero){
        $donnees = DB::table('ecritures')
            ->where('compte','=',$numero)
            ->get();
        return view('grandlivre.detail',[
            'numero' => $numero,
            'data' => $donnees
        ]);
    }
}
