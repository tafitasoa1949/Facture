<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recherche extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $recherches = recherche::where('idFacture', 'LIKE', '%'.$searchTerm.'%')->get();

        return view('results_search', ['recherches' => $recherches]);
    }

    public function rech(Request $request){
        $facture = new recherche();
        $client->save();
        //return redirect()->route('listclient');
    }
}
